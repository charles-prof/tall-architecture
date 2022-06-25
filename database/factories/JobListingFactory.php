<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker_in = \Faker\Factory::create('en_IN');

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(50),
            'level' => collect(["Internship", "Entry", "Associate", "Mid-Senior", "Senior", "Executive", "Manager", "Director"])->random(),
            'type' => collect(["Full Time", "Part Time", "Contract", "Temporary", "Internship", "Others"])->random(),
            'status' => collect(["Pending", "Approved", "rejected", "available", "expired", "published", "unpublished"])->random(),
            'qualification' => $this->faker->sentence(),
            'state' => $faker_in->state(),
            'district' => $faker_in->localityName()
        ];
    }
}
