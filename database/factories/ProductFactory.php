<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
          'name' => $name,
//          'slug' => str($name)->slug(),
//          'slug' => str()->slug($name),
          'slug' => Str::slug($name),
          'category_id' => Category::query()->inRandomOrder()->first()->id ?? Category::factory(),
          'description' => $this->faker->text(),
          'details' => $this->faker->text(),
          'price' => $this->faker->numberBetween(1,1000),
          'discount' => $this->faker->numberBetween(0,50),
          'quantity' => $this->faker->numberBetween(1,100),
          'mark' => $this->faker->numberBetween(0,5),
          'is_new' => $this->faker->boolean(10),
        ];
    }
}
