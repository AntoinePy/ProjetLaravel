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
    public function insert(){
        if(Auth::check()){
            return view('insertDonnees');
        }else{
            return view('auth\login');
        }
    }
    public function insertDonnees(Request $req){
        $id_site = 1;
        $id_panneau = 1;
        $positionInstallation = "180";
        $id_user = 1;
        $id = Auth::user()->id;
        //echo($id);
        $id_user = $id;
        $this->validate($req,[
               'nombrePanneaux'=>'required',
                'surface'=>'required',
                'latitude'=>'required',
                'longitude'=>'required',
                'coutInstallation'=>'required',
                'dateInstallation'=>'required'
            ]);
        DB::table('sites')
            ->insert(
                ['latitude' =>$req['latitude'],
                    'longitude' =>$req['longitude'],
                    'coutInstallation'=>$req['coutInstallation'],
                    'dateInstallation'=>$req['dateInstallation'],
                    'positionInstallation'=>$positionInstallation,
                    'id_user'=>$id_user
                ]);

        DB::table('panneaux')
            ->insert(
                ['surface' =>$req['surface']
                ]);
        DB::table('panneauxparsite')
            ->insert(
                ['nb' => $req['nombrePanneaux'],
                    'id_site' => $id_site,
                    'id_panneau' => $id_panneau
                ]);


        return view("/donneesInstallation");


    }
}
