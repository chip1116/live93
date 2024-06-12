<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailMainController;
use App\Http\Controllers\DetailScreenController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecentPostController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewPostController;



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

Route::controller(DetailScreenController::class)->group(function(){
    
    Route::get('/place/area/{id}', [DetailScreenController::class,'show'])->name('user.detail-screen');
    Route::get('/place/search', [DetailScreenController::class,'search'])->name('user.search');

});

Route::controller(CategoryController::class)->group(function(){
    
    Route::get('/category/{id}', [CategoryController::class,'show'])->name('user.category');
});

Route::controller(RecentPostController::class)->group(function(){
    
    Route::get('/recent', [RecentPostController::class,'show'])->name('user.recent');
});


Route::get('/contact',function(){
    return view('user.contact');
})->name('user.contact');

Route::controller(DetailMainController::class)->group(function(){
    Route::get('/detail/{id}', [DetailMainController::class,'show'])->name('user.detail-main');
   

});

Route::controller(MypageController::class)->group(function(){
    Route::get('/mypage', 'show')->name('user.mypage');
    Route::get('/mypage/logout', 'logout')->name('user.logout');
});

Route::controller(IndexController::class)->group(function(){
    Route::get('/toppage', [IndexController::class, 'show'])->name('user.index');
});

Route::get('/newpost',function(){
    return view('user.newpost');
})->name('user.newpost');

// 新規投稿DB保存処理
Route::controller(NewPostController::class)->group(function(){
    Route::get('/newpost', [NewPostController::class, 'create'])->name('user.newpost');
    Route::post('/newpost', [NewPostController::class, 'store'])->name('post.newstore');
});

// 口コミページページDB保存処理
Route::controller(PostController::class)->group(function(){
    Route::get('/post', [PostController::class, 'create'])->name('user.post');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
});

// ログイン処理
Route::controller(MemberController::class)->group(function(){
    Route::get('/user-login', [MemberController::class, 'index'])->name('user.login');
    Route::post('/user-login', [MemberController::class, 'login'])->name('login');
});

Route::get('/user-register',function(){
    return view('user.register');
})->name('user.register');


