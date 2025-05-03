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

        return [
            'category_id' => Category::factory(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'building' => $this->faker->word(),
            'detail' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
