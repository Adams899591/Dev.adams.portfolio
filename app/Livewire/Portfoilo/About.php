<?php

namespace App\Livewire\Portfoilo;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.portfoilo.about')->layout("layouts.app");
    }
}
