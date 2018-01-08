<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;



class ProfilController extends Controller
{
    public function create(){
        if(Auth::check()){
            $user = User::all();
            return view('profil');
        }else{
            return view('auth\login');
        }
    }
}
