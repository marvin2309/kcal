<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_foods = [
            [
                'name' => 'baking powder',
                'serving_size' => 1,
                'serving_unit' => 'tsp',
                'serving_weight' => 4.6,
                'calories' => 2.44,
                'fat' => 0,
                'cholesterol' => 0,
                'sodium' => 0.488,
                'carbohydrates' => 1.27,
                'protein' => 0,
            ],
            [
                'name' => 'egg',
                'detail' => 'large',
                'serving_size' => 1,
                'serving_weight' => 50.3,
                'calories' => 71.9,
                'fat' => 5.01,
                'cholesterol' => 0.207,
                'sodium' => 0.0649,
                'carbohydrates' => 0.483,
                'protein' => 6.24,
            ],
            [
                'name' => 'flour',
                'detail' => 'all-purpose',
                'serving_size' => 1,
                'serving_unit' => 'cup',
                'serving_weight' => 125,
                'calories' => 455,
                'fat' => 1.22,
                'cholesterol' => 0,
                'sodium' => 0.0025,
                'carbohydrates' => 95.4,
                'protein' => 12.9,
            ],
            [
                'name' => 'milk',
                'detail' => 'whole',
                'serving_size' => 1,
                'serving_unit' => 'cup',
                'serving_weight' => 244,
                'calories' => 146,
                'fat' => 7.81,
                'cholesterol' => 0.0293,
                'sodium' => 0.0927,
                'carbohydrates' => 11.4,
                'protein' => 8,
            ],
            [
                'name' => 'salt',
                'detail' => 'table',
                'serving_size' => 1,
                'serving_unit' => 'tsp',
                'serving_weight' => 6,
                'calories' => 0,
                'fat' => 0,
                'cholesterol' => 0,
                'sodium' => 2.33,
                'carbohydrates' => 0,
                'protein' => 0,

            ],
            [
                'name' => 'sugar',
                'detail' => 'white',
                'serving_size' => 1,
                'serving_unit' => 'cup',
                'serving_weight' => 200,
                'calories' => 770,
                'fat' => 0.64,
                'cholesterol' => 0,
                'sodium' => 0.002,
                'carbohydrates' => 199,
                'protein' => 0,
            ],
            [
                'name' => 'vegetable oil',
                'serving_size' => 1,
                'serving_unit' => 'tbsp',
                'serving_weight' => 14,
                'calories' => 124,
                'fat' => 14,
                'cholesterol' => 0,
                'sodium' => 0,
                'carbohydrates' => 0,
                'protein' => 0,
            ],
            [
                'name' => 'peanut butter',
                'detail' => 'organic creamy',
                'brand' => 'Kirkland',
                'serving_size' => 2,
                'serving_unit' => 'tbsp',
                'serving_weight' => 32,
                'calories' => 180,
                'fat' => 15,
                'cholesterol' => 0,
                'sodium' => 0.065,
                'carbohydrates' => 7,
                'protein' => 8,
            ],
            [
                'name' => 'raisins',
                'brand' => 'Kroger',
                'serving_size' => 0.25,
                'serving_unit' => 'cup',
                'serving_weight' => 40,
                'calories' => 140,
                'fat' => 0,
                'cholesterol' => 0,
                'sodium' => 0.010,
                'carbohydrates' => 33,
                'protein' => 1,
            ],
            [
                'name' => 'peanuts',
                'detail' => 'dry roasted, unsalted',
                'brand' => 'Kroger',
                'serving_size' => 0.25,
                'serving_unit' => 'cup',
                'serving_weight' => 28,
                'calories' => 160,
                'fat' => 14,
                'cholesterol' => 0,
                'sodium' => 0,
                'carbohydrates' => 6,
                'protein' => 7,
            ],
            [
                'name' => 'canned corn',
                'detail' => 'golden sweet',
                'brand' => 'WinCo',
                'serving_size' => 0.5,
                'serving_unit' => 'cup',
                'serving_weight' => 125,
                'calories' => 60,
                'fat' => 0.5,
                'sodium' => 0.2,
                'carbohydrates' => 9,
                'protein' => 1,
            ],
        ];
        Food::factory()->createMany($default_foods);
    }
}
