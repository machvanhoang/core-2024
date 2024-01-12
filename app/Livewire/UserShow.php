<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{
    public User $user;

    public string $name = '';
    public string $email = '';
    public function update()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'name' => 'required|min:5|max:255',
        ]);

        $data = $this->only(['email', 'name']);
        $this->user->update($data);
        $this->dispatch('user-show')->self();
    }
    public function boot()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }
    public function render()
    {
        return view('livewire.user-show');
    }
}
