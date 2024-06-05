<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Member;

class RankingController extends Controller
{
    public function __construct(
        store $store,
        Member $member)
    {
    $this->store = $store;
    $this->member = $member;      
}

public function show()
{
    $rank = $this->store->count('member_id')->orderBy('member_id_count', 'desc')->limit(3)->get();
    // $items = $this->member
    //     ->where('location_id', '=', $id)
    //     ->get();
    return view('user.detail-screen', compact('items','rank','locations'));

}

}
