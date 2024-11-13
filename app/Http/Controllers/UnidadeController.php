<?php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnidadeController extends Controller
{
    public function index(){
        $bandeiras = Bandeira::all();
        $loginAuth = Auth::check();

        $active_menu = "UN";

        return view('unidades', [
            'bandeiras' => $bandeiras,
            'active_menu' => $active_menu,
            'loginAuth' => $loginAuth
        ]);
    }
}
