<?php

use App\Http\Controllers\CandidateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//register/login
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [RegisterController::class,'register']);

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('auth/logout', 'AuthController@logout');
    // Protected routes
});
//candidate api
Route::resource('/candidate', CandidateController::class);
