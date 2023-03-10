<?php

use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-user',[UserController::class, 'daftarUser']);
Route::post('/create-user',[UserController::class, 'createUser']);
Route::post('/update-user/{id}',[UserController::class, 'updateUser']);
Route::get('/detail-user/{id}',[UserController::class, 'detailUser']);
Route::delete('/delete-user/{id}',[UserController::class, 'deleteUser']);


