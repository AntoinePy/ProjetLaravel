<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DonneesInstallationController extends Controller
{

    public function create(){
        if(Auth::check()){
            return view('donneesInstallation');
        }else{
            return view('auth\login');
        }
    }
    public function insertDonnees(Request $req){
        $nombrePanneaux = $req->input('nombrePanneaux');
        $surface = $req->input('surface');
        $latitude = $req->input('latitude');
        $longitude = $req->input('longitude');
        $cout = $req->input('cout');

        $data1 = array('nb'=>$nombrePanneaux);
        $data2 = array('surface'=>$surface);
        $data3 = array('latitude'=>$latitude , 'longitude' =>$longitude, 'cout'=>$cout);

        DB::table('panneauxparsite')->insert($data1);
        DB::table('panneaux')->insert($data2);
        DB::table('sites')->insert($data3);

        return view('insertDonnees');


    }
}
