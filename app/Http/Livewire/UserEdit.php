<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id, $name, $email;

    public function mount($user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->name = NULL;
        $this->email = NULL;
        $this->password = NULL;
        redirect()->route('crud')->with('success', 'User berhasil diupdate');
    }

    public function render()
    {
        return view('livewire.user-edit');
    }
}
