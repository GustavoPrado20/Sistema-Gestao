<?php

namespace App\Livewire;

use App\Models\GrupoEconomico;
use Livewire\Component;

class EditRemoveGrupoEconomico extends Component
{
    public $showModalEditGrupoEconomico = false;
    public $showModalRemoveGrupoEconomico = false;

    public $nome;
    
    public $id_grupo_economico;
    public $data_grupo_economico;

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

    public function openEditGrupoEconomico(){
        $this->data_grupo_economico = GrupoEconomico::findById(intval($this->id_grupo_economico));
        $this->nome = $this->data_grupo_economico['nome'];
        $this->showModalEditGrupoEconomico = true;
    }

    public function update(){
        $this->validate();
        $data = ['nome' => $this->nome];
        $update = GrupoEconomico::query()->where('id', '=', intval($this->id_grupo_economico))->update($data);

        if($update)
        {
            return redirect()->route('gruposEconomicos')->with('success', 'Atualizado com sucesso!');
        }
    }

    public function closeEditGrupoEconomico(){
        return redirect()->route('gruposEconomicos');
    }

    public function openRemoveGrupoEconomico(){
        $this->showModalRemoveGrupoEconomico = true;
    }

    public function delete(){
        $delete = GrupoEconomico::query()->where('id', '=', intval($this->id_grupo_economico))->delete();

        if($delete)
        {
            return redirect()->route('gruposEconomicos')->with('success', 'Removido com sucesso!');
        }
    }

    public function closeRemoveGrupoEconomico(){
        return redirect()->route('gruposEconomicos');
    }
    public function render()
    {
        return view('livewire.edit-remove-grupo-economico');
    }
}
