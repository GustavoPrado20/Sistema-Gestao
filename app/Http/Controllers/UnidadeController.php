<?php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function index(){
        $bandeiras = Bandeira::all();

        return view('unidades', ['bandeiras' => $bandeiras]);
    }
}
