<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CandidateController;

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


Route::post('/register', [RegisterController::class, 'guestRegister']);
Route::post('/login', [LoginController::class, 'guestLogin']);

Route::get('/candidate', [CandidateController::class, 'getCandidate']);
Route::post('/candidate', [CandidateController::class, 'postCandidate']);
Route::put('/candidate/{id}', [CandidateController::class, 'updateCandidate']);
Route::delete('/candidate/{id}', [CandidateController::class, 'deleteCandidate']);
