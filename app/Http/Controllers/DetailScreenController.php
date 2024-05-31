<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Location;


class DetailScreenController extends Controller
{
       
        public function __construct(
            store $store,
            Location $location)
        {
        $this->store = $store;
        $this->location = $location;
       
       
    }

    public function show($id)
    {
        $rank = $this->store->withCount('like')->orderBy('like_count', 'desc')->limit(3)->get();
        $items = $this->store
            ->where('location_id', '=', $id)
            ->get();
       $locations = $this->location->find($id)->toArray();
        return view('user.detail-screen', compact('items','rank','locations'));

    }
}
