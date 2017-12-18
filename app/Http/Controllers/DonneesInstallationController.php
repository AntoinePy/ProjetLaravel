<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DonneesInstallationController extends Controller
{

    public function create(){
        if(Auth::check()){
            return view('donneesInstallation');
        }else{
            return view('auth\login');
        }
    }
}
