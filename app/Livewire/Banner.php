<?php

namespace App\Livewire;

use Livewire\Component;

class Banner extends Component
{
    public $showBanner = false;

    public function render()
    {
        return view('livewire.banner');
    }
  
    public function openBanner()
    {
        $this->showBanner = true;
    }
 
    public function closeBanner()
    {
        $this->showBanner = false;
            }

}
