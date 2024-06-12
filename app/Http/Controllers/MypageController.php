<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Member;
use App\Models\Store;
class MypageController extends Controller
{
    public function __construct(
        Member $member,
        Store $store,
        Post $post
    ) {
        $this->member = $member;
        $this->store = $store;
        $this->post = $post;
    }

    public function show() {
        if (session()->get('member_id') !== null) 
        { 
            $id = session()->get('member_id');
            $items = $this->member->find($id);
            $posts = $this->post
                        ->where('member_id',  '=', $id)
                        ->get();
                
            return view('user.mypage', compact('items', 'posts'));
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
