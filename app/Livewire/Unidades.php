<?php

namespace App\Livewire;

use App\Models\Unidade;
use Livewire\Component;

class Unidades extends Component
{
    public $bandeiras;
    public $search;

    public $loginAuth;
    
    public function render()
    {
        $query = Unidade::with(['colaboradores', 'bandeira']);

        if (!empty($this->search)) {
            $query->where('nome', 'LIKE', '%' . $this->search . '%');
        }

        $dataUnidades = $query->paginate(4);

        $dataUnidades->getCollection()->transform(function ($unidade) {
            return [
                'id' => $unidade->id,
                'nomeFantasia' => $unidade->nome_fantasia,
                'razaoSocial' => $unidade->razao_social,
                'cnpj' => $unidade->cnpj,
                'bandeira' => $unidade->bandeira->nome,
                'colaboradores' => $unidade->colaboradores->count()
            ];
        });

        return view('livewire.unidades', ['dataUnidades' => $dataUnidades]);
    }
}
