<?php

use App\Models\User;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('marchand', MarchandController::class);
Route::apiResource('categorie', CategorieController::class);
Route::apiResource('users', UserController::class);
Route::get('marchands/search/{params}', [MarchandController::class, 'searchLike']);
