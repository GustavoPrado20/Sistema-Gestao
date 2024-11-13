<?php

namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrupoEconomicoController extends Controller
{
    public function index(){
        $active_menu = "GE";
        $loginAuth = Auth::check();

        return view('gruposEconomicos', [
            'active_menu' => $active_menu,
            'loginAuth' => $loginAuth
        ]);
    }  


}
