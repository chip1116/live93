<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('user.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'title' => 'nullable',
            'comment' => 'required',
        ]);

        if (!$validator->fails()) {

        // 投稿内容保存処理
        $this->post = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'comment' => $request->comment,
        ]); 
        session()->flash('message', '送信されました！');
        return redirect()->route('user.index');
    }
        session()->flash('message', '※必須項目が未入力です');
        return  redirect()->route('user.contact')->withInput();
    }
}
