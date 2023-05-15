<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/table', [BlogController::class, 'table']);
Route::get('/lapor', [BlogController::class, 'lapor']);
Route::get('/adminprofile', [BlogController::class, 'adminprofile']);
Route::delete('/category/{id}', [BlogController::class, 'destroy'])->name('nieuws.destroy');
Route::post('profileup/{id}', [BlogController::class, 'profileup']);
Route::post('postup', [BlogController::class, 'postup']);
Route::post('passwordup', [BlogController::class, 'passwordup']);
Route::get('/postingan', [BlogController::class, 'post']);
Route::get('/profile', [BlogController::class, 'profile']);
Route::get('/edit_profile', [BlogController::class, 'editprofile']);
Route::get('/postingan_profile', [BlogController::class, 'postingan']);
Route::get('/komen/{post}', [BlogController::class, 'komen']);
Route::post('/comment', [BlogController::class, 'comment']);
Route::get('/like', [BlogController::class, 'like']);
Route::get('/suka/{post}', [BlogController::class, 'suka']);
Route::post('/authLogin', [ActivityController::class, 'Login']);
Route::post('/authRegist', [ActivityController::class, 'register']);
Route::get('/login', function () {
    return view('/login');
});
Route::get('/register', function () {
    return view('/register');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/', function () {
    return view('landingpage');
});
