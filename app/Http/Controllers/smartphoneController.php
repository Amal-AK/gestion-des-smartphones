<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB ; 
use App\smartphone ; 
use App\etat; 
use App\modele ; 
use App\marque ; 
use Illuminate\Http\Request;
use DataTables; 

class smartphoneController extends Controller
{
    function index () {
        return view('showSmartphone') ; 
    }

    function  add () {
        $etat = etat::all() ; 
        $marque = marque::all() ; 
        $model = modele::all() ; 

        return view('ajoutSmartphone' , ["etat"=> $etat , "model"=> $model , "marque"=>$marque ]) ; 
    }



    function getdata () {

        $data =  DB::select('select * from smartphone  
                             left outer join modele on smartphone.id_model = modele.id_model
                             left outer join marque on marque.id_marque = smartphone.id_marque
                             left outer join etat on etat.id_etat = smartphone.id_etat'); 
                            
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<div class="d-flex  justify-content-around">
                                  <button class="edit btn btn-success btn-sm"><i class="far fa-edit"></i></button> 
                                  <button data-confirm="Êtes-vous sûr de vouloir supprimer ce smartphone ?" class="delete btn btn-danger btn-sm" value="' . $row->id_smart . '"  ><i class="far fa-trash-alt"></i></button> </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
  
    }

    function store(Request $req ) {

        $req->validate([
            'immo' => 'required|digits:5|unique:smartphone',
            'serie1' => 'required|alpha_num|size:15|unique:smartphone,n_serie1' , 
            'serie2' => 'required|alpha_num|size:15|unique:smartphone,n_serie2' , 
          
       ]) ; 

     if ($req->new_etat !='') { 
         $etat = etat::Create([
            'cod_etat' => $req->new_etat , 
         ]) ; 
      $id_etat = $etat->id_etat ; 
     }else {
        $id_etat = $req->etat ;  
        $etat= etat::where('id_etat' , '=' , $id_etat)->first() ; 
     } ; 

     
     if ($req->new_marque !='') { 
        $marque = marque::Create([
           'cod_marque' => $req->new_marque , 
        ]) ; 
     $id_marque = $marque->id_marque ; 
    }else {

       $id_marque = $req->marque ;
       $marque = marque::where('id_marque' , '=' , $id_marque)->first() ; 
    } ; 

    if ($req->new_model !='') { 
        $model = modele::Create([
           'cod_model' => $req->new_model , 
        ]) ; 
     $id_model = $model->id_model ; 
    }else {
       $id_model = $req->model;  
       $model = modele::where('id_model' , '=' , $id_model)->first() ; 
       
    } ; 

  $tel  = smartphone::Create([
        'immo' => $req->immo ,
        'n_serie1' => $req->serie1 , 
        'n_serie2'=> $req->serie2 ,  
        'affecte' =>'Non' , 
        'id_model' => $id_model ,
        'id_marque' => $id_marque , 
        'id_etat' => $id_etat ,  
       ]) ; 

         return  view ( 'smartphoneAjouté' , ['tel'=> $tel , 'marque'=> $marque , 'model'=> $model , 'etat'=>$etat ]); 
        
    }



    function delete(Request $req) {
      $id = $req->id ; 
      $row = smartphone::where('id_smart', $id)->delete() ; 

    }
}
