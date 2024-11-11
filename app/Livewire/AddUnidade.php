<?php

namespace App\Livewire;

use Livewire\Component;

class AddUnidade extends Component
{
    public $showModalAddUnidade = false;

    public function openAddUnidade(){
        $this->showModalAddUnidade = true;
    }

    public function closeAddUnidade(){
        return redirect()->route('unidades');
    
    }
    public function render()
    {
        return view('livewire.add-unidade');
    }
}
