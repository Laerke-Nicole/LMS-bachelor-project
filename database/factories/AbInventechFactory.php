<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbInventechFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ab_inventech_name' => 'AB Inventech',
            'ab_inventech_web' => $this->faker->unique()->url(),
            'ab_inventech_mail' => $this->faker->unique()->companyEmail(),
            'ab_inventech_phone' => $this->faker->unique()->phoneNumber(),
            'address_id' => Address::factory(),
        ];
    }
}
