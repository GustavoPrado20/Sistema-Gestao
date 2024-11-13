<?php

namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BandeiraController extends Controller
{
    public function index(){
        $gruposEconomicos = GrupoEconomico::all();

        $loginAuth = Auth::check();

        $active_menu = "BA";

        return view('bandeiras', [
            'gruposEconomicos' => $gruposEconomicos,
            'active_menu' => $active_menu,
            'loginAuth' => $loginAuth
        ]);
    }
}
