<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
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
<<<<<<< HEAD
Route::post('updateActivity', [AuthController::class, 'updateActivity']);
Route::post('deleteData', [AuthController::class, 'deleteData']);
Route::post('filterActivity', [AuthController::class, 'filterActivity']);
Route::post('getSessionByUserId', [AuthController::class, 'getSessionByUserId']);
Route::post('addSession', [AuthController::class, 'addSession']);
Route::post('updateSession', [AuthController::class, 'updateSession']);
Route::post('updateStatusSession', [AuthController::class, 'updateStatusSession']);
Route::post('deleteStatusSession', [AuthController::class, 'deleteStatusSession']);
=======
Route::post('getpostuse', [AuthController::class, 'getpostuse']);
>>>>>>> bea50005391597c142c32a02587e2a47ee5f3d94
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});