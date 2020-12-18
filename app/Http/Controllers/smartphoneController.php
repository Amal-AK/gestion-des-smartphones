<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB ; 
use App\smartphone ; 
use Illuminate\Http\Request;
use DataTables; 

class smartphoneController extends Controller
{
    function index () {
        return view('showSmartphone') ; 
    }

    function getdata () {

        $data =  DB::select('select * from smartphone  
                             left outer join modele on smartphone.id_model = modele.id_model
                             left outer join marque on marque.id_marque = smartphone.id_marque
                             left outer join etat on etat.id_etat = smartphone.id_etat'); 
                             /*smartphone::with(['modele' , 'marque'])->get();*/
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<div class="d-flex  justify-content-between"> <button class="edit btn btn-success btn-sm">Edit</button> <button class="delete btn btn-danger btn-sm">Delete</button> </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
  
    }
}
