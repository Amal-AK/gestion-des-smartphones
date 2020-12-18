<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\affectation ; 

class affectationController extends Controller
{
   function IndexAjout(){
       return view('AjoutAffect');

    }
    function add() {
       return affectation::all() ; 

    }
}
