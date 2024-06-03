<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like as LikeModel;

class Like extends Component
{   
    public $count, $storeID;

    public function render()
    {
        //ここでソフトでリートチェックする
        $this->count = LikeModel::where('store_id', $this->storeID)
                        ->whereNull('deleted_at')
                        ->count();
        return view('livewire.like');
    }
        public function toggleLike(){
        $this->count++ ;

        //DBに挿入

    }
}
