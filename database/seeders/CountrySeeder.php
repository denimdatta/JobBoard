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
            ['name' => 'United States', 'iso_code' => 'US', 'currency_code' => 'USD'],
            ['name' => 'Canada', 'iso_code' => 'CA', 'currency_code' => 'CAD'],
            ['name' => 'United Kingdom', 'iso_code' => 'GB', 'currency_code' => 'GBP'],
            ['name' => 'Australia', 'iso_code' => 'AU', 'currency_code' => 'AUD'],
            ['name' => 'Germany', 'iso_code' => 'DE', 'currency_code' => 'EUR'],
            ['name' => 'France', 'iso_code' => 'FR', 'currency_code' => 'EUR'],
            ['name' => 'Japan', 'iso_code' => 'JP', 'currency_code' => 'JPY'],
            ['name' => 'China', 'iso_code' => 'CN', 'currency_code' => 'CNY'],
            ['name' => 'India', 'iso_code' => 'IN', 'currency_code' => 'INR'],
            ['name' => 'Brazil', 'iso_code' => 'BR', 'currency_code' => 'BRL'],
            ['name' => 'Mexico', 'iso_code' => 'MX', 'currency_code' => 'MXN'],
            ['name' => 'Italy', 'iso_code' => 'IT', 'currency_code' => 'EUR'],
            ['name' => 'Spain', 'iso_code' => 'ES', 'currency_code' => 'EUR'],
            ['name' => 'Netherlands', 'iso_code' => 'NL', 'currency_code' => 'EUR'],
            ['name' => 'Sweden', 'iso_code' => 'SE', 'currency_code' => 'SEK'],
            ['name' => 'Norway', 'iso_code' => 'NO', 'currency_code' => 'NOK'],
            ['name' => 'Denmark', 'iso_code' => 'DK', 'currency_code' => 'DKK'],
            ['name' => 'Finland', 'iso_code' => 'FI', 'currency_code' => 'EUR'],
            ['name' => 'Switzerland', 'iso_code' => 'CH', 'currency_code' => 'CHF'],
            ['name' => 'Austria', 'iso_code' => 'AT', 'currency_code' => 'EUR'],
            ['name' => 'Belgium', 'iso_code' => 'BE', 'currency_code' => 'EUR'],
            ['name' => 'Poland', 'iso_code' => 'PL', 'currency_code' => 'PLN'],
            ['name' => 'Russia', 'iso_code' => 'RU', 'currency_code' => 'RUB'],
            ['name' => 'South Africa', 'iso_code' => 'ZA', 'currency_code' => 'ZAR'],
            ['name' => 'New Zealand', 'iso_code' => 'NZ', 'currency_code' => 'NZD'],
            ['name' => 'Singapore', 'iso_code' => 'SG', 'currency_code' => 'SGD'],
            ['name' => 'South Korea', 'iso_code' => 'KR', 'currency_code' => 'KRW'],
            ['name' => 'Argentina', 'iso_code' => 'AR', 'currency_code' => 'ARS'],
            ['name' => 'Chile', 'iso_code' => 'CL', 'currency_code' => 'CLP'],
            ['name' => 'Colombia', 'iso_code' => 'CO', 'currency_code' => 'COP'],
            ['name' => 'Remote', 'iso_code' => 'XX', 'currency_code' => 'USD'],
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate(
                ['iso_code' => $country['iso_code']],
                ['name' => $country['name'], 'currency_code' => $country['currency_code']]
            );
        }
    }
}
