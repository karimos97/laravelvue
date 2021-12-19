<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandSeeder::class);
        $this->call(CarModelSeeder::class);
        $this->call(ClientModelSeeder::class);
        $this->call(CountrySeeder::class);

    }
}
