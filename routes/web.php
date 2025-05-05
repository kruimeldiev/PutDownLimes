<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RecipeController::class, 'index']);

Route::get('/recipes/create', [RecipeController::class, 'goToCreateRecipe']);

Route::post('/recipes', [RecipeController::class, 'postNewRecipeAndRedirect']);

Route::get('/recipes/{recipe}', [RecipeController::class, 'recipeDetails']);

Route::delete('/recipes/{id}', [RecipeController::class, 'deleteRecipe']);

Route::get('/auth/login', [AuthController::class, 'goToLoginPage']);