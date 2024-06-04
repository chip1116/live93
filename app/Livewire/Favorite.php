<?php

namespace App\Livewire;
use App\Models\Favorite as FavoriteModel;
use Livewire\Component;
use Auth;

class Favorite extends Component
{
    public $file, $storeID;

    public function mount(){
        $this->file = 'bookmark01@2x.png';
    }

    public function render()
    {
        return view('livewire.favorite');

    }
    public function toggleFavorite(){

        // Favoriteモデルからmember_idとstore_idが一致するデータを取得　... ①
        $memberID = session()->get('member'); 
        $favorite = FavoriteModel::withTrashed()->where('member_id', $memberID)
                  ->where('store_id', $this->storeID)->first();

        // ①のデータが存在しない場合
            // 新規作成（INSERT）
            if ($favorite === null) {
                FavoriteModel::create([
                    'member_id' => $memberID,
                    'store_id' => $this->storeID,
                ]);
        // ①が存在する&&deleted_atがnullの場合 ... ②
            // 現在日時をセットする（UPDATE）→ 削除扱い
        } elseif ($favorite->trashed()) {
            $favorite->restore();
        // ②以外の場合
            // deletedt_atをnullにする（UPDATE）→ 再度ブックマークした扱い
        } else {
            $favorite->delete();
        }

        $this->file = $this->isFavorite() ? 'bookmark02@2x.png' : 'bookmark01@2x.png';
    }

    private function isFavorite(): bool
    {
        $memberID = session()->get('member'); // 現在ログインしているユーザーのIDを取得
        if (!$memberID) {
            return false;
        }

        // 既にお気に入りに追加されているかを確認
        return FavoriteModel::where('member_id', $memberID)->where('store_id', $this->storeID)->exists();
    }
}

