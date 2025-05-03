<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            '商品のお届けについて',
            '商品の交換について',
            '商品トラブル',
            'ショップへのお問い合わせ',
            'その他',
        ];

        foreach ($categories as $categoryContent) {
        Category::create([
            'content' => $categoryContent,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
