<?php

use App\Http\Controllers\LiveTrackingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/kill-artisan', function () {

    $output = [];

    exec('pkill -f "artisan" 2>&1', $output);

    return response()->json([
        'status' => true,
        'message' => 'All artisan processes killed.',
        'output' => $output,
    ]);
});

Route::get('/check-artisan', function () {

    $output = [];

    exec('pgrep -af artisan 2>&1', $output);

    return response()->json([
        'status' => true,
        'message' => 'Running artisan processes checked.',
        'processes' => $output,
    ]);
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

