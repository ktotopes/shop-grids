<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\Languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            LanguagesSeeder::class,
            CurrencySeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
