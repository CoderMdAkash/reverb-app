<?php

use App\Http\Controllers\LiveTrackingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/posts');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::get('/posts/ajax', [PostController::class, 'ajaxPosts'])->name('posts.ajax');

});

Route::get('/test', [PostController::class, 'test'])->name('posts.test');

Route::get('/live', [LiveTrackingController::class, 'showLocation']);
Route::get('/update-location', [LiveTrackingController::class, 'updateLocation']);

