<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;


class DyInput extends Component
{


    public $kontaks, $kontak, $nama, $email, $kontak_id, $delete_id;
    public $updateMethod = false;
    public $inputs = [];
    public $i = 1;


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->email = '';
    }

    public function save()
    {
        $this->validate([
            'nama.0' => 'required',
            'email.0' => 'required|email',
            'nama.*' => 'required',
            'email.*' => 'required|email'
        ]);

        foreach ($this->nama as $i => $v) {
            Kontak::create([
                'nama' => $this->nama[$i],
                'email' => $this->email[$i]
            ]);
        }

        $this->inputs = [];

        $this->resetInput();
        session()->flash('success', 'Account Added Successfully.');
    }

    public function deleteId($id)
    {
        $this->delete_id = $id;

        $this->dispatchBrowserEvent('show-delete');
    }

    public function deleteAksi()
    {
       
        Kontak::where('id', $this->delete_id)->delete();
        session()->flash('success', 'User Berhasil dihapus');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $data = Kontak::all();
        return view('livewire.dy-input', ['data' => $data]);
    }
}
