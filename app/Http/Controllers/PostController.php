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

    $dt = new Carbon();

    // 投稿内容保存処理
    $this->post = Post::create([
        'comment' => $request->comment,
        'date' => $dt,
        'store_id' => $id,
        'member_id' => 2,
        'name' => $request->name,
    ]); 
    session()->flash('message', '投稿できました！');
    return redirect()->route('user.detail-main', ['id' => $id]);
}
}
