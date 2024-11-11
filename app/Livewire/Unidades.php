<?php

namespace App\Livewire;

use Livewire\Component;

class Unidades extends Component
{
    public $showModalEditUnidade = false;
    public $showModalRemoveUnidade = false;

    public function openEditUnidade(){
        $this->showModalEditUnidade = true;
    }

    public function openRemoveUnidade(){
        $this->showModalRemoveUnidade = true;
    }

    public function closeEditUnidade(){
        return redirect()->route('unidades');
    }

    public function closeRemoveUnidade(){
        return redirect()->route('unidades');
    }

    public function render()
    {
        return view('livewire.unidades');
    }
}
