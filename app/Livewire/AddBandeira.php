<?php

namespace App\Livewire;

use App\Models\Bandeira;
use Livewire\Component;

class AddBandeira extends Component
{
    public $showModalAddBandeira = false;
    
    public $nome;
    public $idGrupoEconomico;
    public $gruposEconomicos;

    protected $rules = [
        'nome' => 'required|min:3',
        'idGrupoEconomico' => 'required'
    ];

    public function messages(){
        return [
            'nome.required' => 'O nome da Bandeira é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',

            'idGrupoEconomico.required' => 'Grupo Econômico é obrigatório.'
        ];
    }

    public function openAddBandeira(){
        $this->showModalAddBandeira = true;
    }

    public function store(){
        $this->validate();
        $data = ['nome' => $this->nome, 'id_grupo_economico' => $this->idGrupoEconomico];
        Bandeira::query()->create($data);

        session()->flash('success', 'Bandeira adicionada com sucesso!');
        return redirect()->route('bandeiras');
    }

    public function closeAddBandeira(){
        return redirect()->route('bandeiras');
    }
    public function render()
    {
        return view('livewire.add-bandeira');
    }
}
