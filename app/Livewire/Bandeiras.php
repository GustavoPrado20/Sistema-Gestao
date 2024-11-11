<?php

namespace App\Livewire;

use Livewire\Component;

class Bandeiras extends Component
{
    public $showModalEditBandeira = false;
    public $showModalRemoveBandeira = false;

    public function openEditBandeira(){
        $this->showModalEditBandeira = true;
    }

    public function closeEditBandeira(){
        return redirect()->route('bandeiras');
    }

    public function openRemoveBandeira(){
        $this->showModalRemoveBandeira = true;
    }

    public function closeRemoveBandeira(){
        return redirect()->route('bandeiras');
    }
    public function render()
    {
        return view('livewire.bandeiras');
    }
}
