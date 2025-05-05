<?php

namespace App\Services;

use App\Repositories\RecipeRepository;

class RecipeService
{
    protected $recipe;

    public function __construct(protected RecipeRepository $recipeRepository) {}

    public function getAllRecipes()
    {
        return $this->recipeRepository->all();
    }

    public function getRecipeById($id)
    {
        $recipe = $this->recipeRepository->find($id);
        if (!$recipe) {
            // TODO: Handle not found exception
            throw new \Exception('Recipe not found');
        }
        return $recipe;
    }

    public function createRecipe(array $data)
    {
        $recipe = $this->recipeRepository->create($data);
        return $recipe;
    }

    public function updateRecipe($id, array $data)
    {
        $recipe = $this->recipeRepository->find($id);
        if (!$recipe) {
            // TODO: Error handling
            throw new \Exception('Recipe not found');
        }
        $this->recipeRepository->update($id, $data);
        return $recipe;
    }

    public function deleteRecipe($id)
    {
        $recipe = $this->recipeRepository->find($id);
        $this->recipeRepository->delete($id);
    }
}
