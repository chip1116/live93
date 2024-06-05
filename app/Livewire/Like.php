<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like as LikeModel;

class Like extends Component
{   
    public $file, $count, $storeID;

    public function mount() {
        $this->file = 'moai02@2x.png';
    }
    public function render()
    {
        //ここでソフトでルートチェックする
        $this->count = LikeModel::where('store_id', $this->storeID)
                        ->whereNull('deleted_at')
                        ->count();
        return view('livewire.like');
    }

        public function toggleLike() {
        
        // 1. Likeモデルからmember_idとstore_idが一致するデータを取得
        $memberID = session()->get('member');
        $like = LikeModel::withTrashed()->where('member_id', $memberID)
                ->where('store_id', $this->storeID)->first();
                
        // 2. 1のデータが存在しない場合
            // 新規作成
            if ($like === null) {
                LikeModel::create([
                    'member_id' => $memberID,
                    'store_id' => $this->storeID
                ]);

        // 3. 1のデータが存在するかつソフトデリートされていない場合
            // 現在日時をセットする(ソフトデリートする)
            } elseif ($like->trashed()) {
                $like->restore();

        // 4. それ以外の場合
            // ソフトデリートをなくす→再度ブックマークした扱い
            } else {
                $like->delete();
            }

        $this->file = $this->isLike() ? 'moai@2x.png' : 'moai02@2x.png';
        $this->count++ ;
    }

    private function isLike(): bool
    {
        $memberID = session()->get('member');
        if (!$memberID) {
            return false;
        }

        // すでにお気に入りに追加されているか
        return LikeModel::where('member_id', $memberID)
                        ->where('store_id', $this->storeID)->exists();
    }
}
