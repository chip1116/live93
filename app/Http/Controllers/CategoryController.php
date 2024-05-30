<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class CategoryController extends Controller
{
    public function __construct(
        Store $store
            ) {
        $this->store = $store;
    }

        public function show($id)
    {
        $rank = $this->store->withCount('like')->orderBy('like_count', 'desc')->limit(3)->get();
        $items = $this->store
            ->where('location_id', '=', $id)
            ->get();
        return view('user.detail-screen', compact('items','rank'));

    }

}
