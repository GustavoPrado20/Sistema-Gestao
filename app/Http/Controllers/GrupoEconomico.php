<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoEconomico extends Controller
{
    public function index(){
        return view('gruposEconomicos');
    }
}
