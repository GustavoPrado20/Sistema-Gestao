<?php

namespace App\Livewire;

use Livewire\Component;

class AddColaborador extends Component
{
    public $showModalAddColaborador = false;

    public function openAddColaborador(){
        $this->showModalAddColaborador = true;
    }

    public function closeAddColaborador(){
        return redirect()->route('colaboradores');
    }
    public function render()
    {
        return view('livewire.add-colaborador');
    }
}
