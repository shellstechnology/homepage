<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class estadoPaqueteController extends Controller
{
    public function obtenerEstadoPaquete(Request $request){
        $paquete=request()->input('paquete');
        $response=Http::get("http://127.0.0.1:8001/api/paquete/$paquete");
        $estadoPaquete=$response->json();
        Session::put("estadoPaquete",$estadoPaquete);
        return redirect()->route('paquetes');
    }
}
