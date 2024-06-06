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

    public function show(){
        if (session()->get('member_id') !== null) 
        {
            $id = session()->get('member_id');
            $items = $this->member->find($id);
            $items2 = $this->store
                ->where('location_id', '=', $id)
                ->get();
            return view('user.mypage', compact('items'));
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
