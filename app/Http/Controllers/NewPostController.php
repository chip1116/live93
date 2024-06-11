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
        $post = Post::create([
            'comment' => $request->comment,
            'date' => $dt,
            'store_id' => $id,
            'member_id' => $memberId,
            'post_image' => $imageName
        ]); 

        $address = Store::create([
            'location_id' => $request->location_id,
            'address_level3' => $request->address_level3,
            'member_id' => $memberId,
        ]);

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);
        session()->flash('message', '投稿できました！');
        return redirect()->route('user.detail-main', ['id' => $memberId]);
    }
}
