<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Preview extends Component
{
    use WithFileUploads;

    public $image; // アップロードする画像を保持するプロパティ
    public $imagePreviewUrl; // 選択された画像のプレビューURLを保持するプロパティ

    // ファイルが選択されたときに呼ばれるメソッド
    public function updatedImage()
    {
        // 画像が選択された場合、一時的なURLを取得してプレビューに使用する
        $this->imagePreviewUrl = $this->image->temporaryUrl(); 
    }

    public function render()
    {
        return view('livewire.preview');
    }
}
