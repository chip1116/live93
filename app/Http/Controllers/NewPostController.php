<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        // 名称検索のバリデート
        $validator = Validator::make($request->all(), [
            'tel' => 'required|unique:stores,tel',
        ]);
    
        if ($validator->fails()) {
        $store = Store::where('tel', '=', $request->tel)->first();
        session()->flash('message', '既に登録されています！');
        return redirect()->route('user.detail-main', ['id' => $store->id]);
        }
    
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [
            'name.required' => '名称は必須項目です'
        ]);
        
    
        if (!$validator->fails()) {
// バリデーションが成功した場合の処理
        // 投稿内容保存処理
        $post = Post::create([
            'comment' => $request->comment,
            'date' => $dt,
            'store_id' => $id,
            'member_id' => $memberId,
            'store_comment' => $request->newpostComment
        ]); 

        $address = Store::create([
            'name' => $request->name,
            'location_id' => $request->location_id,
            'tel' => $request->tel,
            'member_id' => $memberId,
        ]);

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);
        session()->flash('message', '投稿できました！');
        return redirect()->route('user.detail-main', ['id' => $memberId]);
        }
    
        return  redirect()->route('user.newpost');
        // return  view('user.newpost');
    }
}
