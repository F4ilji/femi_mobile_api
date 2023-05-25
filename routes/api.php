<?php

use App\Http\Controllers\api\EducationProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\PersonController;
use App\Models\EducationProgram;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/people', [PersonController::class, 'index']);
Route::get('/people/{id}', [PersonController::class, 'show']);

Route::get('/programs', [EducationProgramController::class, 'index']);
Route::get('/programs/{id}', [EducationProgramController::class, 'show']);
