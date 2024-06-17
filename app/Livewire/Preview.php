<?php

// app/Http/Livewire/ImagePreview.php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Preview extends Component
{
    use WithFileUploads;

    public $photo; // アップロードする画像を保持するプロパティ
    public $photoPreview; // 選択された画像のプレビューURLを保持するプロパティ

    // ファイルが選択されたときに呼ばれるメソッド
    public function updatedPhoto()
    {
        // バリデーション（例：画像で最大1MBまで）
        $this->validate([
            'upload' => 'image|max:1024', 
        ]);

        // 画像が選択された場合、一時的なURLを取得してプレビューに使用する
        if ($this->photo) {
            $this->photoPreview = $this->photo->temporaryUrl();
        }
    }

    public function render()
    {
        return view('livewire.preview');
    }
}

