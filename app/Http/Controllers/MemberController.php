<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function login(Request $request) 
    {
        
        $credentials = $request->only(['email', 'password']);
        if(Auth::guard('member')->attempt($credentials)) {

        $memberId = Auth::guard('member')->user()->id;

        $request->session()->put('member_id', $memberId);
        
        return redirect()->route('user.index');
        }
        
        session()->flash('message', '入力内容が間違っています！');
        return redirect()->route('user.login');
    }
}
