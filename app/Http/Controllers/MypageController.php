<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MypageController extends Controller
{
    public function __construct(
        Member $member
    ) {
        $this->member = $member;
    }

    public function show($id){
        $item = $this->member->find($id);
        return view('user.mypage', compact('item'));
    }
}
