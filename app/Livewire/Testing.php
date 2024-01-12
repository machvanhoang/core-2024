<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Testing extends Component
{
    use WithPagination;
    public string $search = '';
    public array $bulk = [];

    public function searchb()
    {
        $this->resetPage();
    }

    public function navigate(int $userId)
    {
        return $this->redirect(route('user_show', $userId), true);
    }

    public function deleteBulk()
    {
        try {
            $users = User::whereIn('id', $this->bulk)->delete();
            $this->reset('bulk');
            session()->flash('success', "Delete successfully ITEM:{$users} !");
        } catch (\Exception $ex) {
            session()->flash('error', $ex->getMessage());
        }

    }

    public function updateStatus(int $userId)
    {
        $user = User::find($userId);
        $user->status = $user->status ? 0 : 1;
        $user->save();
    }
    public function deleteUser(int $userId)
    {
        try {
            $user = User::find($userId);
            $user->delete();
            session()->flash('success', "Delete successfully [{$user->email}] !");
        } catch (\Exception $ex) {
            session()->flash('error', $ex->getMessage());
        }

    }

    #[On('testing')]
    public function render(): View
    {
        $users = User::where(function ($q) {
            $q->where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%");
        })
            ->latest()
            ->paginate(10);
        return view('livewire.testing', compact('users'));
    }
}
