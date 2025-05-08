<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = [
        '商品のお届けについて',
        '商品の交換について',
        '商品トラブル',
        'ショップへのお問い合わせ',
        'その他'
    ];
        return [
            'content' => $this->faker->word(),
        ];
    }
}
