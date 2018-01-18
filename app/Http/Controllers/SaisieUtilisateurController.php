<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class SaisieUtilisateurController extends Controller
{
    public function create(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $site = DB::table('sites')->where('id_user',$id)->value('id');
            $prod = DB::table('productions')->where('id_site',$site)->get();
            return view('saisieUtilisateur',['prod'=>$prod]);
        }else{
            return view('auth\login');
        }
    }
    public function insert(){
        if(Auth::check()){
            return view('insertSaisie');
        }else{
            return view('auth\login');
        }
    }
    public function insertSaisie(Request $req){
        $id_site = 1;
        //1. Recuperer l'id de l'user courant
        $id = Auth::user()->id;
        //$currentUser = User::find($id);
        //2. Recuperer l'id du site de l'user courant
        $site = DB::table('sites')->where('id_user',$id)->value('id');
        //echo($site);
        //echo $site;
        //3. L'affecter à id_site
        $id_site = $site;
        $this->validate($req,[
            'date'=>'required',
            'production'=>'required'

        ]);
        DB::table('productions')
            ->insert(
                ['nbkWh' =>$req['production'],
                    'date' =>$req['date'],
                    'id_site' =>$id_site,
                    'created_at'=>$req['date']
                ]);
        $id = Auth::user()->id;
        $prod = DB::table('productions')->where('id_site',$id)->get();

        return redirect("/saisieUtilisateur");

    }

}
