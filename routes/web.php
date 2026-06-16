<?php

use App\Http\Controllers\LiveTrackingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/restart-artisan-services', function (Request $request) {

    Artisan::call('queue:restart');

    try {
        Artisan::call('reverb:restart');
    } catch (\Throwable $e) {

        try {
            // Artisan::call('reverb:stop');
            Artisan::call('reverb:start');
        }catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => $e->getMessage(),
        ]);
    }

    return response()->json([
        'status' => true,
        'message' => 'Queue and Reverb restart signal sent successfully.',
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

