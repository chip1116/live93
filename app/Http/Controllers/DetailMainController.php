<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Post;
use App\Models\Member;

class DetailMainController extends Controller
{
    public function __construct(
        Store $store,
        Post $post,
        Member $member
    ) {
        $this->store = $store;
        $this->post = $post;
        $this->member = $member;
    }
    public function show($id){
        $item = $this->store->find($id);
        $member = $this->store->find($id)->member->get();
        // $item2 = $this->post->find($id);
        // return view('user.detail-main', compact('item', 'item2'));
        // $user = $this->member->get('member_id');        

        return view('user.detail-main', compact('item', 'member'));
    }
}

