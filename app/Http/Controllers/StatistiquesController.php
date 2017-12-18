<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StatistiquesController extends Controller
{
    public function create(){
        if(Auth::check()){
            return view('statistiques');
        }else{
            return view('auth\login');
        }
    }
}
