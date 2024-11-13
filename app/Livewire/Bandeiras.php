<?php

namespace App\Livewire;

use App\Models\Bandeira;
use Livewire\Component;

class Bandeiras extends Component
{
    public $search;
    public $gruposEconomicos;
    public $loginAuth;

    public function render()
    {
        $query = Bandeira::with(['grupoEconomico', 'unidades', 'unidades.colaboradores']);

        if (!empty($this->search)) {
            $query->where('nome', 'LIKE', '%' . $this->search . '%');
        }

        $dataBandeiras = $query->paginate(4);

        $dataBandeiras->getCollection()->transform(function ($bandeira) {
            return [
                'id' => $bandeira->id,
                'nome' => $bandeira->nome,
                'grupoEconomico' => $bandeira->grupoEconomico->nome,
                'unidades' => $bandeira->unidades->count(),
                'colaboradores' => $bandeira->unidades->sum(fn($unidade) => $unidade->colaboradores->count())
            ];
        });

        return view('livewire.bandeiras', ['dataBandeiras' => $dataBandeiras]);
    }
}
