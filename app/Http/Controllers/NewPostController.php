<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Store;
use App\Models\Category;
use App\Models\StoreCategory;


class NewPostController extends Controller
{
    public function create()
    {
            // ログインしてない人が新規投稿を押下したらログインページに遷移するようにする機能
        if (session()->get('member_id') !== null)  {
            // 存在する場合
            return view('user.newpost');
        } 
            // 存在しない場合
            session()->flash('message', 'ログイン後に投稿してください！');
            return view('user.login');
            
    }

    public function store(Request $request)
    {
        $id = 1;
        $dt = new Carbon();
        $memberId = session()->get('member_id');

        // 名称検索のバリデート
        $validator = Validator::make($request->all(), [
            'tel' => 'unique:stores,tel',
        ]);
    
        if ($validator->fails()) {
        $store = Store::where('tel', '=', $request->tel)->first();
        session()->flash('message', '既に登録されているのでクチコミ投稿をお願いします！');
        return redirect()->route('user.detail-main', ['id' => $store->id])->withInput();
        }
    
        $validator = Validator::make($request->all(), [
            'tel' => 'required',
            'name' => 'required',
            'location_id' => 'nullable',
            'upload' => 'nullable',
            'newpostComment' => 'nullable',
        ]);
        
    
        if (!$validator->fails()) {
        
// バリデーションが成功した場合の処理
        // 投稿内容保存処理
        $address = Store::create([
            'name' => $request->name,
            'location_id' => $request->location_id,
            'tel' => $request->tel,
            'member_id' => $memberId,
            'store_comment' => $request->newpostComment,
            'store_img' => $request->upload
        ]);

        foreach($request->category_id as $categoryID) {
            $category = StoreCategory::create([
                'category_id' => $categoryID,
                'store_id' =>$address->id
            ]);
        }
        session()->flash('message', '投稿できました！');
        return redirect()->route('user.detail-main', ['id' => $address->id]);
        }
        session()->flash('message', '必須項目が未入力です');
        return  redirect()->route('user.newpost')->withInput();
        // return  view('user.newpost');
    }
}
