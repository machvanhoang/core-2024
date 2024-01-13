<div>
    <h1>Product page</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('product_detail', $product->slug) }}" wire:navigate>{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
