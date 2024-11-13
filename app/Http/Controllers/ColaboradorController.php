<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index(){
        $unidades = Unidade::all();
        $loginAuth = Auth::check();

        $active_menu = "CO";

        return view('colaboradores', [
            'unidades' => $unidades,
            'active_menu' => $active_menu,
            'loginAuth' => $loginAuth
        ]);
    }
}
