<?php

namespace App\Livewire;

use App\Models\GrupoEconomico;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Void_;

class GruposEconomicos extends Component
{
    public $search;

    public $loginAuth;

    public function render()
    {

        $query = GrupoEconomico::with(['bandeiras', 'bandeiras.unidades', 'bandeiras.unidades.colaboradores']);

        if (!empty($this->search)) {
            $query->where('nome', 'LIKE', '%' . $this->search . '%');
        }

        $colaboradoresPorGrupo = $query->paginate(4);

        $colaboradoresPorGrupo->getCollection()->transform(function ($grupo) {
            return [
                'id' => $grupo->id,
                'nome' => $grupo->nome,
                'bandeiras' => $grupo->bandeiras->count(),
                'unidades' => $grupo->bandeiras->sum(fn($bandeira) => $bandeira->unidades->count()),
                'colaboradores' => $grupo->bandeiras->sum(
                    fn($bandeira) => $bandeira->unidades->sum(
                        fn($unidade) => $unidade->colaboradores->count()
                    )
                )
            ];
        });
        
        return view('livewire.grupos-economicos', ['dataGruposEconomicos' => $colaboradoresPorGrupo]);
    }
}
