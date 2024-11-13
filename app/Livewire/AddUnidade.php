<?php

namespace App\Livewire;

use App\Models\Unidade;
use Livewire\Component;

class AddUnidade extends Component
{
    public $showModalAddUnidade = false;

    public $loginAuth;

    public $nomeFantasia;
    public $razaoSocial;
    public $cnpj;
    public $idBandeira;

    public $bandeiras;

    protected $rules = [
        'nomeFantasia' => 'required|min:3',
        'razaoSocial' => 'required|min:5',
        'cnpj' => 'required|min:14|max:14|unique:unidades,cnpj',
        'idBandeira' => 'required'
    ];

    public function messages(){
        return [
            'nomeFantasia.required' => 'O nome da Unidade é obrigatório.',
            'nomeFantasia.min' => 'O nome deve ter pelo menos 3 caracteres.',

            'razaoSocial.required' => 'A Razao Social da Unidade é obrigatório.',
            'razaoSocial.min' => 'Deve ter pelo menos 5 caracteres.',

            'cnpj.required' => 'O CNPJ é obrigatório!',
            'cnpj.min' => 'O CNPJ é Invalido.',
            'cnpj.max' => 'O CNPJ é Invalido.',
            'cnpj.unique' => 'Este CNPJ ja está em uso!',

            'idBandeira.required' => 'Bandeira é obrigatório!'
        ];
    }

    public function openAddUnidade(){
        $this->showModalAddUnidade = true;
    }

    public function store(){
        $this->validate();

        Unidade::create([
            'nome_fantasia' => $this->nomeFantasia,
            'razao_social' => $this->razaoSocial,
            'cnpj' => $this->cnpj,
            'id_bandeira' => $this->idBandeira
        ]);

        session()->flash('message', 'Unidade adicionada com sucesso!');

        $this->closeAddUnidade();
    }

    public function closeAddUnidade(){
        return redirect()->route('unidades');
    
    }
    public function render()
    {
        return view('livewire.add-unidade');
    }
}
