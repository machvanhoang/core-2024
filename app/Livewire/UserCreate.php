<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public string $name = '';
    public string $email = '';

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
           Loading....
        </div>
        HTML;
    }
    public function store()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|min:5|max:255',
        ]);

        $data = $this->only(['email', 'name']);

        $data['password'] = bcrypt('password');

        try {

            User::create($data);
            $this->dispatch('testing');
            $this->reset();
            session()->flash('success', 'Create user successfully!!!');

        } catch (\Throwable $th) {

            session()->flash('error', $th->getMessage());

        }

    }
    public function render()
    {
        return view('livewire.user-create');
    }
}
