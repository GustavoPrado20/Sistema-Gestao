<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index(){
        $unidades = Unidade::all();

        return view('colaboradores', ['unidades' => $unidades]);
    }
}
