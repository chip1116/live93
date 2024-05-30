<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Post;

class DetailMainController extends Controller
{
    public function __construct(
        Store $store,
        Post $post
    ) {
        $this->store = $store;
        $this->post = $post;
    }
    public function show($id){
        $item = $this->store->find($id);
        $item2 = $this->post->find($id);
        return view('user.detail-main', compact('item', 'item2'));
    }
}

