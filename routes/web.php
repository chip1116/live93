<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/place',function(){
    return view('user.detail-screen');
})->name('user.detail-screen');

Route::get('/contact',function(){
    return view('user.contact');
})->name('user.contact');

Route::get('/detail',function(){
    return view('user.detail-main');
})->name('user.detail-main');

Route::get('/mypage',function(){
    return view('user.mypage');
})->name('user.mypage');

Route::get('/toppage',function(){
    return view('user.index');
})->name('user.index');

Route::get('/login',function(){
    return view('user.login');
})->name('user.login');

Route::get('/newpost',function(){
    return view('user.newpost');
})->name('user.newpost');

Route::get('/post',function(){
    return view('user.post');
})->name('user.post');

Route::get('/register',function(){
    return view('user.register');
})->name('user.register');