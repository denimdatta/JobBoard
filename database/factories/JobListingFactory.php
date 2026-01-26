<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return  array<string, mixed>
     */
    public function definition(): array
    {
        $country = Country::query()->inRandomOrder()->first();

        $country_code = $country->iso_code;
        $currency_code = $country_code != 'XX'
            ? $country->currency_code
            : Country::query()->inRandomOrder()->first()->currency_code;

        return [
            'title' => $this->faker->jobTitle(),
            'company' => Company::query()->inRandomOrder()->first()->name,
            'location' => $this->faker->city(),
            'country_code' => $country_code,
            'currency_code' => $currency_code,
            'salary' => $this->faker->numberBetween(6500000, 75000000),
        ];
    }
}
