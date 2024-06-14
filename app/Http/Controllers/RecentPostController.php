<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class RecentPostController extends Controller
{
    public function __construct(
        store $store)
    {
    $this->store = $store;
          
}

public function show()
{
    $rank = $this->store->withCount('like')->orderBy('like_count', 'desc')->limit(3)->get();
    $items = $this->store->orderBy('created_at', 'desc')->paginate(4);
    return view('user.detail-screen', compact('items', 'rank'));
}

}
