<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('user.post');
    }

    public function store(Request $request)
{
    $id = $request->store_id;

    // 画像のファイル名を変更
    $postImage = $request->file('upload');
    $imageName = time().'.'.$postImage->getClientOriginalExtension();

    // 画像のアップロード
    $path = $postImage->storeAs('public/storage', $imageName);
    
    $dt = new Carbon();

    // 投稿内容保存処理
    $this->post = Post::create([
        'comment' => $request->comment,
        'date' => $dt,
        'store_id' => $id,
        'member_id' => 2,
        'name' => $request->name,
        'post_image' => $imageName
        
    ]); 
    session()->flash('message', '投稿できました！');
    return redirect()->route('user.detail-main', ['id' => $id])
    ->with(compact('imageName'));
}
}

