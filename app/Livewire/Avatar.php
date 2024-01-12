<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Avatar extends Component
{
    use WithFileUploads;

    public $image;
    public function uploading()
    {
        $this->validate([
            'image' => 'image',
        ]);
        dd($this->image->store('upload', 'public'));
    }
    public function render()
    {
        return view('livewire.avatar');
    }
}
