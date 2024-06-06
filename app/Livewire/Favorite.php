<?php

namespace App\Livewire;
use App\Models\Favorite as FavoriteModel;
use Livewire\Component;

class Favorite extends Component
{
    public $file, $storeID;

    public function mount(){

        $memberID = session()->get('member_id'); 
        $favorite = FavoriteModel::withTrashed()->where('member_id', $memberID)
                  ->where('store_id', $this->storeID)->first();

    // すでにお気に入りされている場合初期を色付きにする
        // sessionのmemberIDと同じmemberIDのデータがあるとき
        if ($favorite !== null) {
            if (!$favorite->trashed()) {
                // ソフトデリートされていないとき色付き
                $this->file = 'bookmark02@2x.png';

            } else {
                // ソフトデリートされていないとき色付き
                $this->file = 'bookmark01@2x.png';
            }

        // sessionのmemberIDと同じmemberIDのデータがないとき色なし
        } else {
            $this->file = 'bookmark01@2x.png';
        }
    }

    public function render()
    {
        return view('livewire.favorite');

    }
    public function toggleFavorite(){

        // Favoriteモデルからmember_idとstore_idが一致するデータを取得　... ①
        $memberID = session()->get('member_id'); 
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
        } elseif (!$favorite->trashed()) {
            $favorite->delete();

        // ②以外の場合
            // deletedt_atをnullにする（UPDATE）→ 再度ブックマークした扱い
        } else {
            $favorite->restore();
        }

        $this->file = $this->isFavorite() ? 'bookmark02@2x.png' : 'bookmark01@2x.png';
    }

    private function isFavorite(): bool
    {
        $memberID = session()->get('member_id'); // 現在ログインしているユーザーのIDを取得
        if (!$memberID) {
            return false;
        }

        // 既にお気に入りに追加されているかを確認
        return FavoriteModel::where('member_id', $memberID)->where('store_id', $this->storeID)->exists();
    }
}

