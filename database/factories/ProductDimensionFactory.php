<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductDimension;

class ProductDimensionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDimension::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'dimensions' => '{}',
            'weight' => $this->faker->randomFloat(2, 0, 999999.99),
            'weight_unit' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'product_id' => Product::factory(),
        ];
    }
}
