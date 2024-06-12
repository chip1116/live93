<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Location;
use App\Models\Category;

class IndexController extends Controller
{
    public function __construct(
        Store $store,
        Location $location,
        Category $category
    ) {
        $this->store = $store;
        $this->location = $location;
        $this->category = $category;
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

        // dd( $rank);
        return view('user.index', compact('items','locations', 'categories','rank'));
    }

    public function popup()
    {
        return view('user.index');
    }

}
