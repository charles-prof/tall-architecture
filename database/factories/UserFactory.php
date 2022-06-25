<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['M', 'F']);
        // $this->faker->addProvider(new \Faker\Provider\en_IN\PhoneNumber);
        $faker_in = \Faker\Factory::create('en_IN');

        return [
            'name' => $this->faker->name(($gender == 'M' ? 'male' : 'female')),
            // 'bio' => $this->faker->sentence(50),
            'bio' => $this->faker->words(50, true),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'first_name' => $gender == 'M' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale(),
            'last_name' => $this->faker->lastName,
            'district' => $faker_in->localityName(),
            'state' => $faker_in->state(),
            'type' => collect(["admin", "trainer", "student"])->random(),
            'gender' => $gender,
            'phone_no' => $faker_in->mobileNumber(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
