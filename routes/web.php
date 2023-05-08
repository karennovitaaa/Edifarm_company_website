<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ActivityController;


Route::get('/table', [BlogController::class, 'table']);
Route::get('/lapor', [BlogController::class, 'lapor']);
Route::get('/adminprofile', [BlogController::class, 'adminprofile']);
Route::delete('/category/{id}', [BlogController::class,'destroy'])->name('nieuws.destroy');
Route::post('profileup/{id}', [BlogController::class,'profileup']);
Route::post('passwordup', [BlogController::class,'passwordup']);
Route::get('/postingan', [BlogController::class, 'post']);
Route::get('/profile', [BlogController::class, 'profile']);
Route::get('/edit_profile', [BlogController::class, 'editprofile']);
Route::post('/authLogin', [ActivityController::class, 'Login']);
Route::post('/authRegist', [ActivityController::class, 'register']);
Route::get('/login', function() {
    return view('login');
});
Route::get('/register', function() {
    return view('register');
});
Route::get('/postingan', function() {
    return view('postingan');
});

Route::get('/tentang', function() {
    return view('tentang');
});
Route::get('/landingpage', function() {
    return view('landingpage');
});