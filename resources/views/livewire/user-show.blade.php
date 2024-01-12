<div>
    <div x-data="{ expanded: false }">
        <button type="button" x-on:click="expanded = ! expanded">
            <span x-show="! expanded">Show post content...</span>
            <span x-show="expanded">Hide post content...</span>
        </button>

        <div x-show="expanded">
            {{ $user->email }}
        </div>
    </div>
    <form wire:submit='update'>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" wire:model="name" class="form-control" id="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" wire:model="email" class="form-control" id="email">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
