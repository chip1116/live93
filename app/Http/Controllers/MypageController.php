<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Store;
use App\Models\Location;
class MypageController extends Controller
{
    public function __construct(
        Member $member,
        Store $store,
        Location $location
    ) {
        $this->member = $member;
        $this->store = $store;
        $this->location = $location;
    }

    public function show($id){
        $items = $this->member->find($id);
        $items2 = $this->store
            ->where('location_id', '=', $id)
            ->get();
        return view('user.mypage', compact('items'));
    }
}
