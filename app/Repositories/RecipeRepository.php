<?php

namespace App\Repositories;

use App\Models\Recipe;
use App\Repositories\Interfaces\RecipeRepositoryInterface;

class RecipeRepository implements RecipeRepositoryInterface
{
    public function all()
    {
        return Recipe::latest()->get();
    }

    public function find($id)
    {
        return Recipe::findOrFail($id);
    }

    public function create(array $data)
    {
        return Recipe::create($data);
    }

    public function update($id, array $data)
    {
        $recipe = $this->find($id);
        $recipe->update($data);
        return $recipe;
    }

    public function delete($id)
    {
        $recipe = $this->find($id);
        return $recipe->delete();
    }

    public function filter($filters)
    {
        return Recipe::latest()->filter($filters)->get();
    }
}