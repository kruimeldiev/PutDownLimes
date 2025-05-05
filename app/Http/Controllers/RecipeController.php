<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Recipe;
use App\Services\RecipeService;

class RecipeController extends Controller
{
    public function __construct(protected RecipeService $recipeService)
    {
        // Constructor injection
    }

    // Home navigation (web)
    public function index()
    {
        // Will return the view with the recipes, as we have no front end
        return view('home', [
            'recipes' => $this->recipeService->getAllRecipes(),
        ]);
    }

    // Get all recipes (API)
    public function getAllRecipes()
    {
        $recipies = $this->recipeService->getAllRecipes();
        // Will return the API call response
        return response()->json(
            data: $recipies,
            status: 200,
        );
    }

    // Recipe details (web)
    public function recipeDetails(Recipe $recipe)
    {
        return view('recipes.details', [
            'recipe' => $recipe,
        ]);
    }

    // Get recipe by ID (API)
    public function getRecipeById($id)
    {
        $recipe = $this->recipeService->getRecipeById($id);
        return response()->json(
            data: $recipe,
            status: 200,
        );
    }

    // Create recipe (web)
    public function goToCreateRecipe()
    {
        return view('recipes.create');
    }

    // Validate and store recipe data (web)
    public function postNewRecipeAndRedirect(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('recipes', 'title')],
            'description' => 'required',
            'tags' => 'required',
            'steps' => 'required',
        ]);
        $this->recipeService->createRecipe($formFields);
        return redirect('/')->with('message', 'Recipe shared successfully!');
    }

    // Validate and create recipe (API)
    public function createRecipe(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('recipes', 'title')],
            'description' => 'required',
            'tags' => 'required',
            'steps' => 'required',
        ]);
        $recipe = $this->recipeService->createRecipe($formFields);
        return response()->json(
            data: $recipe,
            status: 201,
        );
    }

    // Delete a recipe (web)
    public function deleteRecipe($id)
    {
        $recipe = $this->recipeService->getRecipeById($id);
        $recipe->delete();
        return redirect('/')->with('message', 'Recipe deleted successfully!');
    }
}