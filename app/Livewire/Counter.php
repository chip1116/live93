<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 10;

    public function inc() {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
