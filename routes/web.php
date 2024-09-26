<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Models\Recipe;

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

// All recipes
Route::get('/', [RecipeController::class, 'index']);

// Show create recipe form
Route::get('/recipes/create', [RecipeController::class, 'create']);

// Store recipe data
Route::post('/recipes', [RecipeController::class, 'store']);

// Single recipe
Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);
