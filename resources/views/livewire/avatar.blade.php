<div>
    <form wire:submit="uploading">
        <div class="">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}">
            @endif
        </div>
        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <!-- File Input -->
            <input type="file" wire:model="image">

            <!-- Progress Bar -->
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
        <div>
            <button type="submit">Upload</button>
        </div>
    </form>
</div>
