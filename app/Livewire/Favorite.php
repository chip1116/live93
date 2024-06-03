<?php

namespace App\Livewire;

use Livewire\Component;

class Favorite extends Component
{
    public $file;

    public function mount(){
        $this->file = 'bookmark01@2x.png';
    }

    public function render()
    {
        return view('livewire.favorite');

    }
    public function toggleFavorite(){

        // Favoriteモデルからmember_idとstore_idが一致するデータを取得　... ①
        $memberID = Auth::id(); 

        // ①のデータが存在しない場合
        　// 新規作成（INSERT）

        // ①が存在する&&deleted_atがnullの場合 ... ②
            // 現在日時をセットする（UPDATE）→ 削除扱い

        // ②以外の場合
            // deletedt_atをnullにする（UPDATE）→ 再度ブックマークした扱い

        $this->file = 'bookmark02@2x.png';

    }
}
