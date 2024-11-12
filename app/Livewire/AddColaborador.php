<?php

namespace App\Livewire;

use App\Models\Colaborador;
use Livewire\Component;

class AddColaborador extends Component
{
    public $showModalAddColaborador = false;

    public $nome;
    public $email;
    public $cpf;
    public $idUnidade;

    public $unidades;

    protected $rules = [
        'nome' => 'required|min:3',
        'email' => 'required|email',
        'cpf' => 'required|min:11|max:11',
        'idUnidade' => 'required'
    ];

    public function messages(){
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',

            'email.required' => 'A email do colaborador é obrigatório.',
            'email.email' => 'O email deve ser Válido!',

            'cpf.required' => 'O CPF é obrigatório!',
            'cpf.min' => 'O CPF é Invalido.',
            'cpf.max' => 'O CPF é Invalido.',

            'idUnidade.required' => 'Unidade é obrigatório!'
        ];
    }

    public function openAddColaborador(){
        $this->showModalAddColaborador = true;
    }

    public function store(){
        $this->validate();

        Colaborador::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'id_unidade' => $this->idUnidade
        ]);

        session()->flash('message', 'Colaborador adicionado com sucesso!');
        return redirect()->route('colaboradores');
    }

    public function closeAddColaborador(){
        return redirect()->route('colaboradores');
    }
    public function render()
    {
        return view('livewire.add-colaborador');
    }
}
