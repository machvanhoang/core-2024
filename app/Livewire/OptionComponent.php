<?php

namespace App\Livewire;

use Livewire\Component;

class OptionComponent extends Component
{
    public $option;
    public function render()
    {
        return view('livewire.option-component');
    }
}
