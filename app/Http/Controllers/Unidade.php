<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Unidade extends Controller
{
    public function index(){
        return view('unidades');
    }
}
