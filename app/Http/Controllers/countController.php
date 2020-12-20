<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB ; 
use Illuminate\Http\Request;
use Illuminate\Http\Response ; 
class countController extends Controller
{
    function getCountsTel() {
        
        $data = DB::select('select count(DISTINCT smartphone.immo ) as total , sum(case when smartphone.immo in (SELECT immo from affectation)  then 1 else 0 end ) as  total_aff , 
        sum(case when smartphone.immo not in ( select immo from affectation) then 1 else 0 end ) as  total_dispo , 
        count(DISTINCT endommage.immo ) as total_endo ,
        count(DISTINCT affectation.id_act ) as total_inter , 
        count( restitution.id_rest ) as total_rest
        from smartphone 
        left outer join endommage on endommage.immo = smartphone.immo 
        left outer join restitution on restitution.immo = smartphone.immo 
        left OUTER join affectation on affectation.immo = smartphone.immo') ; 

        return response()->json(['data'=>$data]);; 

    }
}
