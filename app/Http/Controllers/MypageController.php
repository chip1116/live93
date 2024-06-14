<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Member;
use App\Models\Store;
use App\Models\Favorite;
class MypageController extends Controller
{
    public function __construct(
        Member $member,
        Store $store,
        Post $post,
        Favorite $favorite
    ) {
        $this->member = $member;
        $this->store = $store;
        $this->post = $post;
        $this->favorite = $favorite;
    }

    public function show() {
        if (session()->get('member_id') !== null) 
        { 
            $id = session()->get('member_id');
            $items = $this->member->find($id);
            $posts = $this->post::with('store')
                        ->where('member_id',  '=', $id)
                        ->whereNull('deleted_at')
                        ->get();

            $store = $this->store::with('like')
                        ->where('member_id', '=', $id)
                        ->whereNull('deleted_at')
                        ->withCount('like')
                        ->get();
                        // dd($store);
            
            $likeCount = 0;
            foreach ($store as $row) {
                $likeCount += $row->like_count;
                // dd($row);
            } 
            
            $favorite = $this->favorite::with('store')
                        ->where('member_id', '=', $id)
                        ->get();


            return view('user.mypage', compact('items', 'posts', 'favorite', 'likeCount'));
        } else {
            session()->flash('message', 'ログインしてください。');
            return redirect()->route('user.login');
        }
    }

    public function logout() {
        session()->flash('message_logout', 'ログアウトしました。');
        session()->pull('member_id');

        return redirect()->route('user.index');
    }
}
