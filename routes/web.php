<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ActivityController;


Route::get('/table', [BlogController::class, 'table']);

Route::get('/lapor', [BlogController::class, 'lapor']);
Route::delete('/category/{id}', [BlogController::class,'destroy'])->name('nieuws.destroy');
Route::get('/postingan', [BlogController::class, 'post']);
Route::get('/profile', [BlogController::class, 'profile']);
Route::get('/edit_profile', [BlogController::class, 'editprofile']);

Route::get('/login', function() {
    return view('login');
});
Route::get('/post', function() {
    return view('post');
});

Route::get('/register', function() {
    return view('register');
});
Route::get('/postingan', function() {
    return view('postingan');
});
Route::get('/profile', function() {
    return view('profile');
});
Route::get('/edit_profile', function() {
    return view('edit_profile');
});
Route::get('/activity', function() {
    return view('activity');
});
Route::post('/authLogin', [ActivityController::class, 'login']);
Route::post('/authRegist', [ActivityController::class, 'register']);