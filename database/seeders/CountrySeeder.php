<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeds the countries table with a predefined set of country records.
 * Each record includes an ISO code and corresponding country name.
 */
class CountrySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['iso_code' => 'US', 'name' => 'United States'],
            ['iso_code' => 'CA', 'name' => 'Canada'],
            ['iso_code' => 'GB', 'name' => 'United Kingdom'],
            ['iso_code' => 'AU', 'name' => 'Australia'],
            ['iso_code' => 'DE', 'name' => 'Germany'],
            ['iso_code' => 'FR', 'name' => 'France'],
            ['iso_code' => 'JP', 'name' => 'Japan'],
            ['iso_code' => 'CN', 'name' => 'China'],
            ['iso_code' => 'IN', 'name' => 'India'],
            ['iso_code' => 'BR', 'name' => 'Brazil'],
            ['iso_code' => 'MX', 'name' => 'Mexico'],
            ['iso_code' => 'IT', 'name' => 'Italy'],
            ['iso_code' => 'ES', 'name' => 'Spain'],
            ['iso_code' => 'NL', 'name' => 'Netherlands'],
            ['iso_code' => 'SE', 'name' => 'Sweden'],
            ['iso_code' => 'NO', 'name' => 'Norway'],
            ['iso_code' => 'DK', 'name' => 'Denmark'],
            ['iso_code' => 'FI', 'name' => 'Finland'],
            ['iso_code' => 'CH', 'name' => 'Switzerland'],
            ['iso_code' => 'AT', 'name' => 'Austria'],
            ['iso_code' => 'BE', 'name' => 'Belgium'],
            ['iso_code' => 'PL', 'name' => 'Poland'],
            ['iso_code' => 'RU', 'name' => 'Russia'],
            ['iso_code' => 'ZA', 'name' => 'South Africa'],
            ['iso_code' => 'NZ', 'name' => 'New Zealand'],
            ['iso_code' => 'SG', 'name' => 'Singapore'],
            ['iso_code' => 'KR', 'name' => 'South Korea'],
            ['iso_code' => 'AR', 'name' => 'Argentina'],
            ['iso_code' => 'CL', 'name' => 'Chile'],
            ['iso_code' => 'CO', 'name' => 'Colombia'],
            ['iso_code' => 'XX', 'name' => 'Remote'],
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate(
                ['iso_code' => $country['iso_code']],
                ['name' => $country['name']]
            );
        }
    }
}
