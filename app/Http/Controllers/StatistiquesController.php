<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ConsoleTVs\Charts\Facades\Charts;


class StatistiquesController extends Controller
{


    public function create(){
        if(Auth::check()){
            $chart = Charts::create('bar','morris')
                ->Title('Exemple')
                ->Labels(['First','Second','Third'])
                ->Values([5,10,20])
                ->ElementLabel("Total KW")
                ->Width(0)
                ->Height(400)
                ->Colors(["#ff0000"])
                ->Dimensions(1000,500)
                ->Responsive(true);
            return view('statistiques',['chart' => $chart]);
        }else{
            return view('auth\login');
        }
    }


}
