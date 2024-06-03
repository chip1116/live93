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
    $items = $this->store->orderBy('created_at', 'desc')->get();
    $rank = $this->store->orderBy('created_at', 'desc')->limit(3)->get();
    return view('user.detail-screen', compact('items', 'rank'));
}

}
