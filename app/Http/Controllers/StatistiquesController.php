<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ConsoleTVs\Charts\Facades\Charts;


class StatistiquesController extends Controller
{


    public function create(){
        if(Auth::check()){
            $chart = Charts::create('line','highcharts')
                ->Title('Exemple')
                ->Labels(['First','Second','Third'])
                ->Values([5,10,20])
                ->Dimensions(1000,500)
                ->Responsive(false);
            return view('statistiques',['chart' => $chart]);
        }else{
            return view('auth\login');
        }
    }


}
