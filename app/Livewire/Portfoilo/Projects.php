<?php

namespace App\Livewire\Portfoilo;

use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.portfoilo.projects')->layout("layouts.app");
    }
}
