<?php

namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class BandeiraController extends Controller
{
    public function index(){
        $gruposEconomicos = GrupoEconomico::all();

        return view('bandeiras', ['gruposEconomicos' => $gruposEconomicos]);
    }
}
