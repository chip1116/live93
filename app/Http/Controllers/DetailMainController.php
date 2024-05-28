<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class DetailMainController extends Controller
{
    public function __construct(
        Store $store
    ) {
        $this->store = $store;
    }

    public function show($id){
        $item = $this->store->find($id);
        return view('user.detail-main', compact('item'));
    }
}
