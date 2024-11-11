<?php

namespace App\Livewire;

use Livewire\Component;

class GruposEconomicos extends Component
{
    public $showModalEditGrupoEconomico = false;
    public $showModalRemoveGrupoEconomico = false;

    public function openEditGrupoEconomico(){
        $this->showModalEditGrupoEconomico = true;
    }

    public function closeEditGrupoEconomico(){
        return redirect()->route('index');
    }

    public function openRemoveGrupoEconomico(){
        $this->showModalRemoveGrupoEconomico = true;
    }

    public function closeRemoveGrupoEconomico(){
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.grupos-economicos');
    }
}
