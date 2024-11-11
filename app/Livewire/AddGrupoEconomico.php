<?php

namespace App\Livewire;

use Livewire\Component;

class AddGrupoEconomico extends Component
{
    public $showModalAddGrupoEconomico = false;

    public function openAddGrupoEconomico(){
        $this->showModalAddGrupoEconomico = true;
    }

    public function closeAddGrupoEconomico(){
        $this->showModalAddGrupoEconomico = false;
    }
    public function render()
    {
        return view('livewire.add-grupo-economico');
    }
}
