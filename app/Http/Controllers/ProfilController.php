<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;



class ProfilController extends Controller
{
    public function create(){
        if(Auth::check()){
            $user = DB::table('users')->first();
            echo $user->name;
            echo $user->email;
            return view('profil',['user'=>$user]);
        }else{
            return view('auth\login');
        }
    }
    public function edit(){
        if(Auth::check()){
            return view('profiledit');
        }else{
            return view('auth\login');
        }
    }
}
