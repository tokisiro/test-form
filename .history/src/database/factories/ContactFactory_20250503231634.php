<?php

namespace Database\Factories;

use App\Models\contact;
use App\Models\category;
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
        return [
            'category_id' => Category::factory(),
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'gender' => $faker->numberBetween(1, 3),
            'email' => $faker->unique()->safeEmail(),
            'tel' => $faker->phoneNumber(),
            'address' => $this->faker->address(),
            'building' => $this->faker->word(),
            'detail' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
