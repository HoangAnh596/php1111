<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Product::class;

    public function definition()
    {
        $imgPath = $this->faker->image(storage_path('app/public/uploads/products'), $width = 640, $height = 480, 'cats', false);
        return [
            "name" => $this->faker->name(),
            "cate_id" => Category::all()->random()->id,
            "image" =>  "uploads/products/" . $imgPath,
            "price" => rand(1,2000),
            "quantity" => rand(1,200),
            "status" => rand(0,1)
        ];
    }
}
