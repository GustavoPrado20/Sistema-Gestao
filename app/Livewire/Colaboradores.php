<?php

namespace App\Livewire;

use App\Models\Colaborador;
use Livewire\Component;

class Colaboradores extends Component
{
    public $search;
    public $unidades;
    public $loginAuth;

    public function render()
    {
        $query = Colaborador::with(['unidade']);

        if (!empty($this->search)) {
            $query->where('nome', 'LIKE', '%' . $this->search . '%');
        }

        $dataColaboradores = $query->paginate(4);

        $dataColaboradores->getCollection()->transform(function ($colaborador) {
            return [
                'id' => $colaborador->id,
                'nome' => $colaborador->nome,
                'email' => $colaborador->email,
                'cpf' => $colaborador->cpf,
                'unidade' => $colaborador->unidade->nome_fantasia
            ];
        });

        return view('livewire.colaboradores', ['dataColaboradores' => $dataColaboradores]);
    }
}
