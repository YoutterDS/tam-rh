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
        $this->call([
            // CountriesSeeder::class,
            // LocalesSeeder::class,
            // RolesSeeder::class,
            // UsersSeeder::class,
            // PackagesSeeder::class,
            // PackageOptionsSeeder::class,
            // CoinFormatTableSeeder::class,
            // CoinTableSeeder::class,
            // BillingTypesSeeder::class,
            // BillingRecurrenciesSeeder::class,
            // PlansSeederTable::class,
        ]);
    }
}
