<div wire:poll.20s>
    <div class="container pt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                <form wire:submit="searchb">
                    <input type="text" wire:model="search" />
                    <button type="submit">Search posts</button>
                </form>
                <div>
                    <h3>Bulk</h3>
                    <button wire:click='deleteBulk'>Delete</button>
                </div>
                <ul class="list-style-type-none">
                    @foreach ($users as $user)
                        <li>
                            <div class="row">
                                <div class="col-md-1">
                                    <input type="checkbox" wire:model='bulk' value="{{ $user->id }}" />
                                </div>
                                <div class="col-md-6">
                                    <a class="text-decoration-none" wire:navigate
                                        href="{{ route('user_show', $user) }}">{{ $user->name }} -
                                        {{ $user->email }}</a>
                                </div>
                                <div class="col-md-1">
                                    <input type="checkbox" wire:change='updateStatus({{ $user->id }})' />
                                </div>
                                <div class="col-md-2">
                                    <span
                                        class="badge bg-{{ $user->status ? 'success' : 'secondary' }}">{{ $user->status ? 'Published' : 'Privated' }}
                                        {{ $user->status }}</span>
                                </div>
                                <div class="col-md-2">
                                    <button x-on:click="$wire.navigate({{ $user->id }})">Edit</button>
                                    <button x-on:click="$wire.deleteUser({{ $user->id }})">Delete</button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{ $users->links() }}
            </div>
            <div class="col-md-4">
                <livewire:user-create lazy>
            </div>
        </div>
        <livewire:avatar />
    </div>
</div>
