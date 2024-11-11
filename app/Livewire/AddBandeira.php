<?php

namespace App\Livewire;

use Livewire\Component;

class AddBandeira extends Component
{
    public $showModalAddBandeira = false;

    public function openAddBandeira(){
        $this->showModalAddBandeira = true;
    }

    public function closeAddBandeira(){
        return redirect()->route('bandeiras');
    }
    public function render()
    {
        return view('livewire.add-bandeira');
    }
}
