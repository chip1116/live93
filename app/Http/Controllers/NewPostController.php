<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;

class NewPostController extends Controller
{
    public function create()
    {
        return view('user.newpost');
    }

    public function store(Request $request)
    {
        $id = 1;
    
        $dt = new Carbon();
    
        // 投稿内容保存処理
        $this->post = Post::create([
            'comment' => $request->comment,
            'date' => $dt,
            'store_id' => $id,
            'member_id' => 2,
        ]); 
        session()->flash('message', '登録できました。');
        return redirect()->route('user.detail-main', ['id' => $id]);
    }
}
