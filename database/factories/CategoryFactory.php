<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Strix\Models\Category\Category;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            
        ];
    }
}
