<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('post', [AuthController::class, 'post']);
Route::post('getpost', [AuthController::class, 'getpost']);
Route::post('getact', [AuthController::class, 'getact']);
Route::post('getActFull', [AuthController::class, 'getActFull']);
Route::post('update', [AuthController::class, 'update']);
Route::post('addActivity', [AuthController::class, 'addActivity']);
Route::post('updateStatus', [AuthController::class, 'updateStatus']);

Route::post('updateActivity', [AuthController::class, 'updateActivity']);
Route::post('deleteData', [AuthController::class, 'deleteData']);
Route::post('filterActivity', [AuthController::class, 'filterActivity']);
Route::post('getSessionByUserId', [AuthController::class, 'getSessionByUserId']);
Route::post('addSession', [AuthController::class, 'addSession']);
Route::post('addLike', [AuthController::class, 'addLike']);
Route::post('getLike', [AuthController::class, 'getLike']);
Route::post('countLikesByPostId', [AuthController::class, 'countLikesByPostId']);
Route::post('deleteLikeByPostId', [AuthController::class, 'deleteLikeByPostId']);
Route::post('updateSession', [AuthController::class, 'updateSession']);
Route::post('updateStatusSession', [AuthController::class, 'updateStatusSession']);
Route::post('deleteStatusSession', [AuthController::class, 'deleteStatusSession']);
Route::post('getses', [AuthController::class, 'getses']);

Route::post('getPostLike', [AuthController::class, 'postLike']);
Route::post('getPostUser', [AuthController::class, 'postUser']);
Route::post('getComment', [AuthController::class, 'getComment']);
Route::post('addComment', [AuthController::class, 'addComment']);
Route::post('deleteComment', [AuthController::class, 'deleteComment']);
Route::post('addReport', [AuthController::class, 'addReport']);

Route::post('getpostuse', [AuthController::class, 'getpostuse']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
