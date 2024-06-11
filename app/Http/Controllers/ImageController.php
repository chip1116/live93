<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; 

class ImageController extends Controller
{
    public function store(){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'store_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);                                                                                                                                                                                                                                                                                                               

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('public/images', $imageName);

        $imageModel = new Image();
        $imageModel->file = $imageName;
        $imageModel->store_id = $request->input('store_id');
        $imageModel->user_id = $request->input('user_id');
        $imageModel->save();

        return back()->with('success', 'Image uploaded successfully');
    }
}
