<?php

namespace App\Http\Controllers;

use App\tarifas;
use Illuminate\Http\Request;
use App\Http\Controllers\phpMQTT;

class IndexController extends Controller
{
    
    public function index()
    {
        $tarifas=tarifas::all()->toArray();
       
       return view('index', ['tarifa_principal'=>$tarifas[0]['precio'],'tarifa_secundaria'=>$tarifas[1]['precio'] ]);
    }

    public function indexTarifa()
    {
        $tarifas=tarifas::all()->toArray();

        return view('modificarTarifas',['tarifa_principal'=>$tarifas[0]['precio'],'tarifa_secundaria'=>$tarifas[1]['precio']]);

    }

    //mariano aca va la wea mqtt
    private function actualizar_mqtt($Tarif_Diur,$Tarif_Noc)
    {
       $tarifas=array("TD"=>$Tarif_Diur,"TN"=>$Tarif_Noc);

        $server = '3.226.108.231';     // change if necessary
        $port = 1883;                     // change if necessary
        $username = 'bot1';                   // set your username
        $password = 'bot1pass';                   // set your password
        $client_id = 'Server-PHP'; // make sure this is unique for connecting to 
        
        $mqtt=new phpMQTT($server, $port, $client_id);

        if ($mqtt->connect(true, NULL, $username, $password)) {
            $mqtt->publish('salida',json_encode($tarifas), 0, false);
            $mqtt->close();
        } else {
            echo "Time out!\n";
        }
        

        return;
    }

    public function PostTarifa(Request $request)
    {

        $tarifas=tarifas::all();
       
        $tarifas[0]['precio']=$request->tarifa_diurna;
        $tarifas[0]->save();

        $tarifas[1]['precio']=$request->tarifa_nocturna;
        $tarifas[1]->save();

        //mariano aca va la wea mqtt
        $this->actualizar_mqtt( $tarifas[0]['precio'],$tarifas[1]['precio']);

        return back();

    }
    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(tarifas $tarifas)
    {
        //
    }

   
    public function edit(tarifas $tarifas)
    {
        //
    }

    public function update(Request $request, tarifas $tarifas)
    {
        //
    }

   
    public function destroy(tarifas $tarifas)
    {
        //
    }
}
