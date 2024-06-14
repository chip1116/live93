<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Member;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function regist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'unique:members',
        ]);
        
        if ($validator->fails()) {
            session()->flash('message', '既に登録されているメールアドレスです');
            return  redirect()->route('user.register')->withInput();
        }  

        $validator = Validator::make($request->all(), [
            'password' => ['required','confirmed'],
        ]);

        if ($validator->fails()) {
            session()->flash('message', '※入力したパスワードが異なります');
            return  redirect()->route('user.register')->withInput();
        }  

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if (!$validator->fails()) {
               $this->member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]);  

        $request->session()->put('member_id', $this->member->id);

        session()->flash('message', '登録できました！');
        return redirect()->route('user.index');
        }
        session()->flash('message', '※必須項目が未入力です');
        return  redirect()->route('user.register')->withInput();
    }
}
