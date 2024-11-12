<?php

namespace App\Livewire;

use App\Models\Bandeira;
use Livewire\Component;

class EditRemoveBandeira extends Component
{
    public $showModalEditBandeira = false;
    public $showModalRemoveBandeira = false;
    public $gruposEconomicos;

    public $id_bandeira;

    public $nome;
    public $idGrupoEconomico;
    public $dataBandeira;

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

    public function openEditBandeira(){
        $this->dataBandeira = Bandeira::findById(intval($this->id_bandeira));
        $this->nome = $this->dataBandeira['nome'];
        $this->idGrupoEconomico = $this->dataBandeira['id_grupo_economico'];
        $this->showModalEditBandeira = true;
    }

    public function update(){
        $this->validate();
        $data = ['nome' => $this->nome, 'id_grupo_economico' => $this->idGrupoEconomico];
        $update = Bandeira::query()->where('id', '=', intval($this->id_bandeira))->update($data);

        if($update)
        {
            return redirect()->route('bandeiras')->with('success', 'Atualizado com sucesso!');
        }
    }

    public function closeEditBandeira(){
        return redirect()->route('bandeiras');
    }

    public function openRemoveBandeira(){
        $this->showModalRemoveBandeira = true;
    }

    public function delete(){
        $delete = Bandeira::query()->where('id', '=', intval($this->id_bandeira))->delete();

        if($delete)
        {
            return redirect()->route('bandeiras')->with('success', 'Removido com sucesso!');
        }
    }

    public function closeRemoveBandeira(){
        return redirect()->route('bandeiras');
    }
    
    public function render()
    {
        
        return view('livewire.edit-remove-bandeira');
    }
}
