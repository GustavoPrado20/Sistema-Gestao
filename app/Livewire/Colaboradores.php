<?php

namespace App\Livewire;

use Livewire\Component;

class Colaboradores extends Component
{
    public $showModalEditColaborador = false;
    public $showModalRemoveColaborador = false;

    public function openEditColaborador(){
        $this->showModalEditColaborador = true;
    }

    public function openRemoveColaborador(){
        $this->showModalRemoveColaborador = true;
    }

    public function closeEditColaborador(){
        return redirect()->route('colaboradores');
    }

    public function closeRemoveColaborador(){
        return redirect()->route('colaboradores');
    }
    
    public function render()
    {
        return view('livewire.colaboradores');
    }
}
