<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            [
                'symbol' => '$',
                'name'   => 'USD',
            ],
            [
                'symbol' => '€',
                'name'   => 'EUR',
            ],
            [
                'symbol' => '₽',
                'name'   => 'RUB',
            ],
            [
                'symbol' => '₴',
                'name'   => 'UAH',
            ],
            [
                'symbol' => '$',
                'name'   => 'USD',
            ],
        ]);
    }
}
