<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name, $email, $password;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function tambahData()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $this->name = NULL;
        $this->email = NULL;
        $this->password = NULL;

        session()->flash('success', 'User Berhasil dibuat');
        $this->emit('tambahData');
    }
}
