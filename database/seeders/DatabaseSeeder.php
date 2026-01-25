<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeds the application's database with initial data.
 */
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            [
                'name' => 'Test User',
            ],
            [
                'email' => 'test@example.com',
                'password' => bcrypt('test'),
            ],
        ]);

        $this->call([
            CountrySeeder::class,
        ]);
    }
}
