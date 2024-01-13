<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public function render()
    {
        $products = ModelsProduct::all();
        return view('livewire.product', compact('products'));
    }
}
