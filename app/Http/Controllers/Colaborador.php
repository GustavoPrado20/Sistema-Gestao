<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Colaborador extends Controller
{
    public function index(){
        return view('colaboradores');
    }
}
