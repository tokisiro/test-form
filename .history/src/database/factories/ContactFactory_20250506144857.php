<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Contact::class;
    public function definition()
    {
        $faker = FakerFactory::create('ja_JP');
        $categoryIds = [201, 202, 203, 204, 205];

        return [
            'category_id' => randomElement($categoryIds),
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'gender' => $faker->numberBetween(1, 3),
            'email' => $faker->unique()->safeEmail(),
            'tel' => $faker->phoneNumber(),
            'address' => $faker->address(),
            'building' => $faker->word(),
            'detail' => $faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
