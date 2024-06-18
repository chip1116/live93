<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\StoreCategory;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(
        Store $store,
        Category $category
    ) {
        $this->store = $store;
        $this->category = $category;
    }

        public function show($id)
    {
        $rank = $this->store->withCount('like')
            ->whereHas('category', function($query) use ($id){
                $query->where('category_id', $id);
            })->orderBy('like_count', 'desc')->limit(3)->get();

        $items = $this->store
        ->whereHas('category', function($query) use ($id){
            $query->where('category_id', $id);
        })->paginate(4);

        $category = $this->category->find($id);

        return view('user.detail-screen', compact('items','rank', 'category'));

    }

}
