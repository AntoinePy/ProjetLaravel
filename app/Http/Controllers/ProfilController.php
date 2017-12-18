<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfilController extends Controller
{
    public function create(){
        if(Auth::check()){
            return view('profil');
        }else{
            return view('auth\login');
        }
    }
}
