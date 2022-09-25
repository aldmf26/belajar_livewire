<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    protected $listeners = ['tambahData' => 'render'];

    public function delete($id)
    {
        User::where('id', $id)->delete();
        session()->flash('success', 'User Berhasil dihapus');
    }

    public function render()
    {

        return view('livewire.user-table', [
            'user' => User::orderBy('id', 'DESC')->get(),
        ]);
    }
}
