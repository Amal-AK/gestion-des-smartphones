<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\affectation ; 
use App\smartphone ; 
use App\acteur ; 
use DataTables; 
use Illuminate\Support\Facades\DB ; 

class affectationController extends Controller
{

   // la page de formulaire d'ajout d'une affectation 
      function IndexAjout(){
         return view('AjoutAffect');

      }

   // ajouter une nouvelle affectation 
      function store(Request $req) {

         $req->validate([
            'nom' => 'required|string|max:30|min:3' , 
            'prenom' => 'required|string|max:30|min:3' , 
            'tel' => 'required|digits:10',
            'matricule' => 'required|digits:5',
            'immo' => 'required|digits:5|exists:smartphone',
            'date_attr' => 'required|date|before:tomorrow' , 
            'recupere' => 'required|string' , 
            'remis' => 'required|string' , 
       ]) ; 

      $tel = smartphone::where('immo','=' , $req->immo)->get();
      $act = acteur::where('matricule','=' , $req->matricule)->first();
      if ($act == null){
         $act = acteur::create([
               'MATRICULE' => $req->matricule , 
               'NOM' => $req->nom , 
               'PRENOM' => $req->prenom , 
               'N_TEL' => $req->tel , 
               'fonction' =>$req->fonction ,
               'idcentre' => $req->centre , 
         ]) ; 
      
      } 
      $id_act= $act->ID_ACT ;
      $aff = affectation::firstOrCreate([
         'id_act' => $id_act , 
         'immo' => $tel[0]['immo'] , 
         'date_attrib' => $req->date_attr, 
         'commentaire' => $req->remarque , 
         'id_smart' =>$tel[0]['id_smart'] ,
         'id_etat' => $req->etat , 
         'recupere_par'=> $req->recupere ,
         'remis_par' => $req->remis , 
       ]) ; 
         return view('affectationAjoutée' , ['aff'=> $aff , 'acteur' => $act , 'tel' => $tel]) ; 
    }

  

    // retourner les données des affectations 
    function getdata(Request $request) {

      $data =  DB::select('select affectation.id_affect , smartphone.immo , acteur.NOM , acteur.PRENOM  , acteur.MATRICULE , affectation.date_attrib , affectation.recupere_par , affectation.remis_par
                           from affectation 
                           left outer join acteur on acteur.id_act = affectation.id_act 
                           left outer join smartphone on affectation.id_smart= smartphone.id_smart '); 
           
         return Datatables::of($data)
         ->addIndexColumn()
         ->make(true);

    }





    function afficher(){
       return view('AfficherAffectations');
    }
}
