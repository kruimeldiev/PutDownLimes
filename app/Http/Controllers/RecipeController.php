<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Recipe;

class RecipeController extends Controller
{
    // Get and show all recipes
    public function index()
    {
        // TODO: Paginate on scroll?
        return view('home', [
            'recipes' => Recipe::latest()->filter(request(['tag', 'search']))->simplepaginate(6)
        ]);
    }

    // Get and show a single recipe
    public function show(Recipe $recipe)
    {
        return view('recipes.details', [
            'recipe' => $recipe
        ]);
    }

    // Create a recipe
    public function create()
    {
        return view('recipes.create');
    }

    // Store recipe data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('recipes', 'title')],
            'description' => 'required',
            'tags' => 'required',
            'steps' => 'required',
        ]);

        Recipe::create($formFields);

        return redirect('/')->with('message', 'Recipe shared successfully!');
    }
}
