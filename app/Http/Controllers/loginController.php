<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class loginController extends Controller
{
    public function login(Request $request){
        $datos=$request->all();
        $nombre = $datos['usuario'];
        $password = $datos['password'];
        
        $response = Http::get("http://127.0.0.1:8000/api/v1/validate");

        
        dd($response->json());
    }
}
