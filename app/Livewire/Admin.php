<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.admin')]
class Admin extends Component
{
    public function render()
    {
        return view('livewire.admin');
    }
}
