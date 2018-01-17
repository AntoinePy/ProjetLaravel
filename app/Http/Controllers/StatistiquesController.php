<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ConsoleTVs\Charts\Facades\Charts;
use App\User;
use Illuminate\Support\Facades\DB;

class StatistiquesController extends Controller
{


    public function create(){
        if(Auth::check()){
            echo(User::all());
            $chart = Charts::database(User::all(), 'bar', 'highcharts')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupBy('name');
            return view('statistiques',['chart' => $chart]);
        }else{
            return view('auth\login');
        }
    }
    public function prodJourna(){
        if(Auth::check()){
            $production = DB::table('productions')->get();
            $nbkw = DB::table('productions')->value('nbkWh');
            echo($production);
            $chart = Charts::create('bar','highcharts')
                ->title('Coucou')
                ->elementLabel("Total")
                ->labels($production->pluck('date'))
                ->values($production->pluck('nbkWh'))
                ->dimensions(1000,500)
                ->responsive(true)
                ->groupByDay();

            return view('prodJourna',['chart' => $chart]);
        }else{
            return view('auth\login');
        }
    }


}
