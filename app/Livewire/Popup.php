<?php

namespace App\Livewire;

use Livewire\Component;

class Popup extends Component
{
    public $showPopup = false;
 
    public function render()
    {
        return view('livewire.popup');
    }
 
    public function openPopup()
    {
        $this->showPopup = true;
    }
 
    public function closePopup()
    {
        $this->showPopup = false;
            }
}
