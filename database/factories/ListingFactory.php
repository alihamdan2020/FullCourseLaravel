<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'tag' => 'html, css',
            'location' => $this->faker->city(),
            'description' =>$this->faker->paragraph(5),
            // the number 5 in faker->paragraph mean 5 sentences
            'user_id' =>5
        ];
    }
}
