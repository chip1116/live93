<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Store;
use App\Models\Category;


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
        $memberId = session()->get('member_id');
    
        // 投稿内容保存処理
        // $post = Post::create([
        //     'comment' => $request->comment,
        //     'date' => $dt,
        //     'store_id' => $id,
        //     'member_id' => $memberId,
        // ]); 

        $address = Store::create([
            'name' => $request->name,
            'location_id' => $request->location_id,
            'tel' => $request->tel,
            'member_id' => $memberId,
            'store_comment' => $request->newpostComment
        ]);

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);
        session()->flash('message', '投稿できました！');
        return redirect()->route('user.detail-main', ['id' => $memberId]);
    }
}
