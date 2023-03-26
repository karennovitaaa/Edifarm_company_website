<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ActivityController;


Route::get('/table', [BlogController::class, 'table']);
Route::get('/lapor', [BlogController::class, 'lapor']);
Route::get('/postingan', [SideController::class, 'post']);
Route::get('/profile', [SideController::class, 'profile']);
Route::get('/edit_profile', [SideController::class, 'editprofile']);
Route::get('/login', function() {
    return view('login');
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