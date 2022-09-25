<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{
    public $nama_lengkap;
    public function mount($name)
    {
        $this->nama_lengkap = $name;
    }
    public function render()
    {
        
        return view('livewire.article');
    }
}
