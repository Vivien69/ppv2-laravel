<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\MarchandController;
use App\Http\Controllers\API\CategorieController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichparrainb
| is assigned the "api" middleware group. Enjoy building your API!employeurpar
|
*/

Route::apiResource('marchand', MarchandController::class);
Route::apiResource('categorie', CategorieController::class);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('users/private', [UserController::class, 'showPrivate']);
    Route::get('users/{user}/role', [UserController::class, 'role']);
    
});

Route::post('profil', [UserController::class, 'profil']);


Route::get('marchands/search/{params}', [MarchandController::class, 'searchLike']);


