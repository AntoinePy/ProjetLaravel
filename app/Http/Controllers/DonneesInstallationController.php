<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DonneesInstallationController extends Controller
{

    public function create(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $site2 = DB::table('sites')->where('id_user',$id)->value('id');
            //echo($site);
            $site1 = DB::table('sites')->where('id_user',$id)->first();
            $panneau = DB::table('panneauxparsite')->where('id_site',$site2)->first();
            $user = DB::table('users')->where('id',$id)->first();
            //echo($panneau);
            return view('donneesInstallation',['site1'=>$site1,'panneau'=>$panneau, 'user'=>$user]);
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

    public function edit(User $user){
        if(Auth::check()){
            return view('editDonnees', ['user' => $user]);
        }else{
            return view('auth\login');
        }
    }

    public function update(Request $req, $id){

        $id_site = 1;
        $site1 = DB::table('sites')->where('id_user',$id)->value('id');
            $id_site = $site1;
        $site2 = DB::table('sites')->where('id_user',$id)->value('id');

        $id_panneau = 1;
        $panneaux = 1;

        $idpanneaux = DB::table('panneaux')->where('surface',$req['surface'])->value('id');

            $panneaux = $idpanneaux;


        $panneau = DB::table('panneauxparsite')->where('id_site',$site2)->value('id');
            $id_panneau = $panneau;



        $this->validate($req,[
            'nombrePanneaux'=>'required',
            'surface'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'coutInstallation'=>'required',
            'dateInstallation'=>'required'
        ]);

        DB::table('sites')
            ->where('id',$id_site)
            ->update(
                ['latitude' =>$req['latitude'],
                    'longitude' =>$req['longitude'],
                    'coutInstallation'=>$req['coutInstallation'],
                    'dateInstallation'=>$req['dateInstallation'],
                    'positionInstallation'=>$req['positionInstallation']
                ]);

        DB::table('panneaux')
            ->where('id',$panneaux)
            ->update(
                ['surface' =>$req['surface']
                ]);
        DB::table('panneauxparsite')
            ->where('id',$id_panneau)
            ->update(
                ['nb' => $req['nombrePanneaux'],
                    'id_site' => $id_site,
                    'id_panneau' => $id_panneau
                ]);
        //$id = Auth::user()->id;
        //dump(DB::table('users')->where('id', $id));die();
        return redirect("/donneesInstallation");

    }

    public function insertDonnees(Request $req){
        //id user
        $id_user = 1;
        $id = Auth::user()->id;
        $id_user = $id;

        //id site

        $id_site = 1;
        $site1 = DB::table('sites')->where('id_user',$id)->value('id');
        if ($site1 != null && $site1!=0){
            $id_site = $site1;
        }
        $site2 = DB::table('sites')->where('id_user',$id)->value('id');

        //id panneau*
        $id_panneau = 1;
        $idpanneaux = DB::table('panneaux')->where('surface',$req['surface'])->value('id');
        $panneau = DB::table('panneauxparsite')->where('id_site',$site2)->first();
        if ($panneau != null && $panneau != 0){
            $id_panneau = $panneau;
        }





        $positionInstallation = "180";
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
                    'positionInstallation'=>$req['positionInstallation'],
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


        /*return view("/donneesInstallation",['site1'=>$site1,'panneau'=>$panneau]);*/
        return redirect("/donneesInstallation");


    }
}
