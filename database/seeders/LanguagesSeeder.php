<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'name' => 'English',
                'iso2' => 'en'
            ],
            [
                'name' => 'Russia',
                'iso2' => 'ru'
            ],
            [
                'name' => 'Ukraine',
                'iso2' => 'ua'
            ],
        ]);
    }
}
