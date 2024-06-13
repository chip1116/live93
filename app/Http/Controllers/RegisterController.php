<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function regist(Request $request)
    {
        $this->member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]); 
        
        session()->flash('message', '投稿できました！');
        return redirect()->route('user.index');
    }
}
