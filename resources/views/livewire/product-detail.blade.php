<div class="d-flex justify-content-center align-items-center pt-5">
    <div>
        <a class="btn btn-secondary mb-2" href="{{ route('product') }}" wire:navigate>Go Back</a>
        <ul style="list-style-type: none" class="m-0 p-0">
            <li>
                Name: {{ $product->name }}
            </li>
            <li>
                Slug: {{ $product->slug }}
            </li>
            <li>
                Status: {{ $product->status->name }}
            </li>
            <li>
                Created at: {{ $product->created_at }}
            </li>
            <li>
                Updated at: {{ $product->updated_at }}
            </li>
        </ul>
        <form action="">
            <div class="choice">
                @foreach ($product->options as $option)
                    <livewire:option-component :option="$option" :key="$option->id" />
                @endforeach
            </div>
            <button type="submit" class="btn btn-danger mt-3">AddToCart</button>
        </form>
    </div>
</div>
