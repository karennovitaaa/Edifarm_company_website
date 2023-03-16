<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/table', [BlogController::class, 'table']);
Route::get('/lapor', [BlogController::class, 'lapor']);

Route::get('/login', function() {
    return view('login');
});
Route::get('/register', function() {
    return view('register');
});
Route::get('/postingan', function() {
    return view('postingan');
});