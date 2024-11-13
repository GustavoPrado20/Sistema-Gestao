<?php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use App\Models\Colaborador;
use App\Models\GrupoEconomico;
use App\Models\Unidade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $loginAuth = Auth::check();

        $totalGruposEconomicos = GrupoEconomico::all()->count();
        $totalBandeiras = Bandeira::all()->count();
        $totalUnidades = Unidade::all()->count();
        $totalColaboradores = Colaborador::all()->count();

        $active_menu = "DB";

        $queryCG = GrupoEconomico::with(['bandeiras', 'bandeiras.unidades', 'bandeiras.unidades.colaboradores']);
        $colaboradoresPorGrupo = $queryCG->get()->map(function ($grupo) {
            return [
                'id' => $grupo->id,
                'nome' => $grupo->nome,
                'colaboradores' => $grupo->bandeiras->sum(
                    fn($bandeira) => $bandeira->unidades->sum(
                        fn($unidade) => $unidade->colaboradores->count()
                    )
                )
            ];
        })->sortByDesc('colaboradores')->take(7);

        $ultimosColaboradores = Colaborador::with('unidade')->orderBy('created_at', 'DESC')->limit(5)->get();

        return view('index', [
            'totalGruposEconomicos' => $totalGruposEconomicos,
            'totalBandeiras' => $totalBandeiras,
            'totalUnidades' => $totalUnidades,
            'totalColaboradores' => $totalColaboradores,
            'active_menu' => $active_menu,
            'colaboradoresPorGrupo' => $colaboradoresPorGrupo,
            'ultimosColaboradores' => $ultimosColaboradores,
            'loginAuth' => $loginAuth
        ]);
    }

    public function sair(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
