<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SaisieUtilisateurController extends Controller
{
    public function create(){
        if(Auth::check()){
            return view('saisieUtilisateur');
        }else{
            return view('auth\login');
        }
    }
}
