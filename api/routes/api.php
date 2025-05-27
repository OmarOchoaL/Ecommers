<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\UsersController;


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
Route::get('/peliculas', [IndexController::class, 'peliculas']);
Route::get('/series', [IndexController::class, 'series']);
Route::get('movie/{id}', [MovieController::class, 'show']);
//localhost:8000/api/login =>POST {"email":"admin@gmail.com","password":"admim"}
//localhost:8000/api/login =>POST {"email":"cambia2@gmail.com","password":"1234"}
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:api')->put('/users/plan', [UsersController::class, 'updatePlan']);

