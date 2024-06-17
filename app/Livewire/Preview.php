<?php

namespace App\Livewire;

use Livewire\Component;

class Preview extends Component
{
    public $image;
    
    public function render()
    {
        return view('livewire.preview');
    }
}
