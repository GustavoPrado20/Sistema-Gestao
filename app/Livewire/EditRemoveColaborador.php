<?php

namespace App\Livewire;

use App\Models\Colaborador;
use Livewire\Component;

class EditRemoveColaborador extends Component
{
    public $showModalEditColaborador = false;
    public $showModalRemoveColaborador = false;

    public $nome;
    public $email;
    public $cpf;
    public $idUnidade;

    public $idColaborador;
    public $dataColaborador;
    public $loginAuth;

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

    public function openEditColaborador(){
        $this->showModalEditColaborador = true;
        $this->dataColaborador = Colaborador::findById(intval($this->idColaborador));
        $this->nome = $this->dataColaborador['nome'];
        $this->email = $this->dataColaborador['email'];
        $this->cpf = $this->dataColaborador['cpf'];
        $this->idUnidade = $this->dataColaborador['id_unidade'];
    }

    public function update(){
        $this->validate();
        $data = ['nome' => $this->nome, 'email' => $this->email, 'cpf' => $this->cpf, 'id_unidade' => $this->idUnidade];
        return redirect()->route('colaboradores');
    }

    public function openRemoveColaborador(){
        $this->showModalRemoveColaborador = true;
    }

    public function delete(){
        $delete = Colaborador::query()->where('id', '=', intval($this->idColaborador))->delete();
        return redirect()->route('colaboradores');
    }

    public function closeEditColaborador(){
        return redirect()->route('colaboradores');
    }

    public function closeRemoveColaborador(){
        return redirect()->route('colaboradores');
    }

    public function render()
    {
        return view('livewire.edit-remove-colaborador');
    }
}
