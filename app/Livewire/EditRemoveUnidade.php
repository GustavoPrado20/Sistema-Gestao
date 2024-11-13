<?php

namespace App\Livewire;

use App\Models\Unidade;
use Livewire\Component;

class EditRemoveUnidade extends Component
{
    public $showModalEditUnidade = false;
    public $showModalRemoveUnidade = false;

    public $nomeFantasia;
    public $razaoSocial;
    public $cnpj;
    public $idBandeira;

    public $bandeiras;
    public $id_unidade;

    public $dataUnidade;

    public $loginAuth;

    protected $rules = [
        'nomeFantasia' => 'required|min:3',
        'razaoSocial' => 'required|min:5',
        'cnpj' => 'required|min:14|max:14',
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

            'idBandeira.required' => 'Bandeira é obrigatório!'
        ];
    }

    public function openEditUnidade(){
        $this->dataUnidade = Unidade::findById(intval($this->id_unidade));
        $this->nomeFantasia = $this->dataUnidade['nome_fantasia'];
        $this->razaoSocial = $this->dataUnidade['razao_social'];
        $this->cnpj = $this->dataUnidade['cnpj'];
        $this->idBandeira = $this->dataUnidade['id_bandeira'];
        $this->showModalEditUnidade = true;
    }

    public function update(){
        $this->validate();
        $data = [
            'nome_fantasia' => $this->nomeFantasia,
            'razao_social' => $this->razaoSocial,
            'cnpj' => $this->cnpj,
            'id_bandeira' => $this->idBandeira
        ];
        $update = Unidade::query()->where('id', '=', intval($this->id_unidade))->update($data);

        if($update)
        {
            return redirect()->route('unidades')->with('success', 'Atualizado com sucesso!');
        }
    }

    public function openRemoveUnidade(){
        $this->showModalRemoveUnidade = true;
    }

    public function delete(){
        $delete = Unidade::query()->where('id', '=', intval($this->id_unidade))->delete();

        if($delete)
        {
            return redirect()->route('unidades')->with('success', 'Removido com sucesso!');
        }
    }

    public function closeEditUnidade(){
        return redirect()->route('unidades');
    }

    public function closeRemoveUnidade(){
        return redirect()->route('unidades');
    }


    public function render()
    {
        return view('livewire.edit-remove-unidade');
    }
}
