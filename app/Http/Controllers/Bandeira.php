<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bandeira extends Controller
{
    public function index(){
        return view('bandeiras');
    }
}
