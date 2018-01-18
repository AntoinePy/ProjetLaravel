<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ConsoleTVs\Charts\Facades\Charts;
use App\User;
use Illuminate\Support\Facades\DB;


class StatistiquesController extends Controller
{


    public function create(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $site = DB::table('sites')->where('id_user',$id)->value('id');
            $production = DB::table('productions')->where('id_site',$site)->get();
            $nbkw = DB::table('productions')->value('nbkWh');
            // echo($production);
            $chart = Charts::create('bar','highcharts')
                ->title('Production Journalière')
                ->elementLabel("Total")
                ->labels($production->pluck('date'))
                ->values($production->pluck('nbkWh'))
                ->dimensions(1000,500)
                ->responsive(true);

            return view('statistiques',['chart' => $chart]);
        }else{
            return view('auth\login');
        }
    }
    public function prodJourna(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $site = DB::table('sites')->where('id_user',$id)->value('id');
            $production = DB::table('productions')->where('id_site',$site)->get();
            $nbkw = DB::table('productions')->value('nbkWh');
           // echo($production);
            $chart = Charts::create('bar','highcharts')
                ->title('Production Journalière')
                ->elementLabel("Total")
                ->labels($production->pluck('date'))
                ->values($production->pluck('nbkWh'))
                ->dimensions(1000,500)
                ->responsive(true);
            $charts = Charts::create('line','highcharts')
                ->title('Production Journalière')
                ->elementLabel("Total")
                ->labels($production->pluck('date'))
                ->values($production->pluck('nbkWh'))
                ->dimensions(1000,500)
                ->responsive(true);
            return view('prodJourna',['chart' => $chart , 'charts' => $charts]);
        }else{
            return view('auth\login');
        }
    }
    public function prodMensuelle(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $site = DB::table('sites')->where('id_user',$id)->value('id');
            $production = DB::table('productions')->where('id_site',$site)->get();
            $chart = Charts::database($production, 'bar', 'highcharts')
                ->title('Production Mensuelle')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->labels($production->pluck('created_at'))
                ->values($production->pluck('nbkWh'))
                ->responsive(false)
                ->groupByMonth(2017,true);
            $charts = Charts::database($production, 'line', 'highcharts')
                ->title('Production Mensuelle')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->labels($production->pluck('created_at'))
                ->values($production->pluck('nbkWh'))
                ->responsive(false)
                ->groupByMonth(2017,true);
            return view('prodMensuelle',['chart'=>$chart , 'charts' => $charts]);

        }else{
            return view('auth\login');
        }
    }
    public function prodAnnuelle(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $site = DB::table('sites')->where('id_user',$id)->value('id');
            $production = DB::table('productions')->where('id_site',$site)->get();
            $chart = Charts::database($production, 'bar', 'highcharts')
                ->title('Production Annuelle')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupByYear();
            $charts = Charts::database($production, 'line', 'highcharts')
                ->title('Production Annuelle')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupByYear();

            return view('prodAnnuelle',['chart'=>$chart , 'charts'=>$charts]);

        }else{
            return view('auth\login');
        }
    }


}
