<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GrupoEconomico;

class AddGrupoEconomico extends Component
{
    public $showModalAddGrupoEconomico = false;
    public $nome;

    public $loginAuth;

    protected $rules = [
        'nome' => 'required|min:2'
    ];

    public function messages(){
        return [
            'nome.required' => 'O nome do Grupo Econômico é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 2 caracteres.'
        ];
    }

    public function openAddGrupoEconomico(){
        $this->showModalAddGrupoEconomico = true;
    }

    public function closeAddGrupoEconomico(){
        return redirect()->route('gruposEconomicos');
    }

    public function store(){
        $this->validate();
        $data = ['nome' => $this->nome];
        $store = GrupoEconomico::query()->create($data);

        if($store)
        {
            return redirect()->route('gruposEconomicos')->with('success', 'Adicionado com sucesso!');
        }
    }

    public function render()
    {
        return view('livewire.add-grupo-economico');
    }
}
