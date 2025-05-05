<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/getAllRecipes', [RecipeController::class, 'getAllRecipes']);

Route::get('/getRecipeById/{id}', [RecipeController::class, 'getRecipeById']);

Route::post('/createRecipe', [RecipeController::class, 'createRecipe']);

Route::post('/registerUser', [AuthController::class, 'registerUser']);

Route::post('/loginUser', [AuthController::class, 'loginUser']);