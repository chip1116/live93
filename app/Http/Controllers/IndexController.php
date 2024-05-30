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

    public function show($id){
        $items = $this->store->where('location_id', '=', $id)->get();
        // $location1 = $this->store->get();
        $locations = $this->location->get()->toArray();
        $categories = $this->category->get();
        return view('user.index', compact('items','locations', 'categories'));
    }

}
