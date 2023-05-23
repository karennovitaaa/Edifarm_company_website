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
Route::post('getpoststalk', [AuthController::class, 'getpoststalk']);
Route::post('getact', [AuthController::class, 'getact']);
Route::post('getActFull', [AuthController::class, 'getActFull']);
Route::post('update', [AuthController::class, 'update']);
Route::post('generateReport', [AuthController::class, 'generateReport']);
Route::post('updateStatus', [AuthController::class, 'updateStatus']);
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
Route::post('getCommentsByPostId', [AuthController::class, 'getCommentsByPostId']);
Route::post('addComment', [AuthController::class, 'addComment']);
Route::post('deletePostByPostId', [AuthController::class, 'deletePostByPostId']);
Route::post('countUserByPost', [AuthController::class, 'countUserByPost']);
Route::post('addReason', [AuthController::class, 'addReason']);
Route::post('getAllDocumentations', [AuthController::class, 'getAllDocumentations']);
Route::post('getPostsByUserId', [AuthController::class, 'getPostsByUserId']);
Route::post('getLikesByUserId', [AuthController::class, 'getLikesByUserId']);
Route::post('downloadPDF', [AuthController::class, 'downloadPDF']);
Route::post('addActivity', [AuthController::class, 'addActivity']);
Route::post('addPostActivity', [AuthController::class, 'addPostActivity']);
Route::post('getPostActivity', [AuthController::class, 'getPostActivity']);
Route::post('addRating', [AuthController::class, 'addRating']);
Route::post('calculateAverageRating', [AuthController::class, 'calculateAverageRating']);
Route::post('checkUserRating', [AuthController::class, 'checkUserRating']);
Route::post('checkEmail', [AuthController::class, 'checkEmail']);
Route::post('checkOtp', [AuthController::class, 'checkOtp']);
Route::post('gantiPassword', [AuthController::class, 'gantiPassword']);
Route::post('gantiPasswordByUserId', [AuthController::class, 'gantiPasswordByUserId']);
Route::post('createShareableLink', [AuthController::class, 'createShareableLink']);
Route::post('getPostsByUsername', [AuthController::class, 'getPostsByUsername']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
