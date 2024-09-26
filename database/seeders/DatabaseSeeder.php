<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Recipe::create([
            'title' => 'Vegetarian Pasta Primavera',
            'tags' => 'pasta, vegetables',
            'user' => 'chef_veggie',
            'description' => 'A delicious pasta dish loaded with fresh vegetables.',
            'steps' => '1. Boil pasta\n2. Sauté vegetables\n3. Mix pasta and vegetables\n4. Enjoy!',
        ]);

        Recipe::create([
            'title' => 'Quinoa Salad with Roasted Vegetables',
            'tags' => 'quinoa, salad, roasted vegetables',
            'user' => 'healthy_eater',
            'description' => 'A nutritious salad featuring quinoa and a variety of roasted vegetables.',
            'steps' => '1. Cook quinoa\n2. Roast vegetables\n3. Combine quinoa and vegetables\n4. Serve chilled.',
        ]);

        Recipe::create([
            'title' => 'Spinach and Feta Stuffed Mushrooms',
            'tags' => 'spinach, feta, mushrooms',
            'user' => 'appetizer_master',
            'description' => 'Mushroom caps stuffed with a savory mixture of spinach and feta cheese.',
            'steps' => '1. Remove mushroom stems\n2. Sauté spinach and mix with feta\n3. Stuff mushroom caps\n4. Bake until golden.',
        ]);

        Recipe::create([
            'title' => 'Mediterranean Chickpea Salad',
            'tags' => 'chickpea, salad, mediterranean',
            'user' => 'med_cuisine',
            'description' => 'A refreshing salad featuring chickpeas, tomatoes, cucumbers, and feta cheese.',
            'steps' => '1. Combine chickpeas, tomatoes, cucumbers, and feta\n2. Drizzle with olive oil and lemon juice\n3. Toss and serve chilled.',
        ]);

        Recipe::create([
            'title' => 'Vegetarian Stir-Fry with Tofu',
            'tags' => 'stir-fry, tofu, vegetables',
            'user' => 'wok_chef',
            'description' => 'A quick and flavorful stir-fry with tofu and a mix of colorful vegetables.',
            'steps' => '1. Sauté tofu until golden\n2. Stir-fry vegetables\n3. Add tofu to the vegetables\n4. Season and serve over rice.',
        ]);

        Recipe::create([
            'title' => 'Butternut Squash and Sage Risotto',
            'tags' => 'risotto, butternut squash, sage',
            'user' => 'risotto_expert',
            'description' => 'Creamy risotto infused with the rich flavors of roasted butternut squash and fresh sage.',
            'steps' => '1. Roast butternut squash\n2. Sauté rice and add broth gradually\n3. Stir in roasted squash and sage\n4. Garnish and serve.',
        ]);
    }
}
