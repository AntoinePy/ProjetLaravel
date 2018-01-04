<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Lavacharts;



class StatistiquesController extends Controller
{


    public function create(){
        if(Auth::check()){
            $lava = new Lavacharts;
            $production = $lava->DataTable();
            $production->addStringColumn('Mois')
                ->addNumberColumn('Production');
            $production->addRow(['jan-2016',  rand(1000,5000)])
                        ->addRow(['fév-2016',  rand(1000,5000)])
                ->addRow(['mar-2016',  rand(1000,5000)]);
            /*$lava->ColumnChart('¨Production', $production, [
                'title' => 'Production',
                'titleTextStyle' => [
                    'color' => '#eb6b2c',
                    'fontSize'=> 14
                ]
            ]);*/
            return view('statistiques',compact('lava'));
        }else{
            return view('auth\login');
        }
    }


}
