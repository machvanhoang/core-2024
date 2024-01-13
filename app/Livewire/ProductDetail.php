<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Variant;
use Livewire\Component;

class ProductDetail extends Component
{
    public Product $product;
    public Variant $variantChoice;
    public function mount(string $slug)
    {
        $this->product = Product::with([
            'status',
            'options' => function ($q) {
                $q->with('optionValues');
            }
        ])->where('slug', $slug)->first();

        $this->variantChoice = Variant::where(function ($q) {
            $q->where('product_id', $this->product->id)
                ->where('inventory', '>', 0);
        })->first();
    }
    public function render()
    {
        return view('livewire.product-detail');
    }
}
