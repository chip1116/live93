<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Location;

class DetailScreenController extends Controller
{
       
    public function __construct(
        Store $store,
        Location $location,
    ){
    $this->store = $store;
    $this->location = $location;
    }

    public function show($id)
    {
        $rank = $this->store->withCount('like')->orderBy('like_count', 'desc')->limit(3)->get();
        $items = $this->store
            ->where('location_id', '=', $id)
            ->paginate(4);

       $locations = $this->location->find($id)->toArray();
            // dd($locations);
        $location_none = $this->location->find($id);

        return view('user.detail-screen', compact('items','rank','locations', 'location_none'));
    }

    public function search(Request $request) {
        $rank = $this->store->withCount('like')->orderBy('like_count', 'desc')->limit(3)->get();
        $locations = $this->location->toArray();
        $items = $this->store->where("name", "LIKE", "%{$request->search}%")->paginate(4);
        // $message = '';
        //     if (count($items) <= 0) {
        //         $message = ('検索結果がありません。');
        //     }
            
        // dd($keyword);
        return view('user.detail-screen', compact('items','rank','locations'));
    }

}
