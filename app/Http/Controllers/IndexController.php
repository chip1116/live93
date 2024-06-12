<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Location;
use App\Models\Category;
use App\Models\Member;

class IndexController extends Controller
{
    public function __construct(
        Store $store,
        Location $location,
        Category $category,
        Member $member
    ) {
        $this->store = $store;
        $this->location = $location;
        $this->category = $category;
        $this->member = $member;
    }

    public function show(){
        $items = $this->store->orderBy('created_at', 'desc')->limit(3)->get();
        $locations = $this->location->get()->toArray();
        $categories = $this->category->get();

        $rank = $this->store
                   ->select('member_id', $this->store->raw('count(*) AS member_count'))
                   ->groupBy('member_id')
                   ->orderBy('member_count', 'desc')
                   ->limit(3)
                   ->get();
        
        $user = $this->member->find(session()->get('member_id'));        

        // dd( $user);
        return view('user.index', compact('items','locations', 'categories','rank', 'user'));
    }

    public function popup()
    {
        return view('user.index');
    }

}
