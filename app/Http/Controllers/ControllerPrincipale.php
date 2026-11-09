<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrincipale extends Controller
{
    public function mostra_pagina(){
        return view('index');
    }

    public function mostra_api(){
        return view('RestApi');
    }
}
