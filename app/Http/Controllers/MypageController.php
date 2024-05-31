<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Store;

class MypageController extends Controller
{
    public function __construct(
        Member $member,
        Store $store
    ) {
        $this->member = $member;
        $this->store = $store;
    }

    public function show($id){
        $item = $this->member->find($id);
        $item2 = $this->store->withCount('like')->find('like_count');
        return view('user.mypage', compact('item', 'item2'));
    }
}
