<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            ['id' => 2,  'name' => 'Андижанская область'],
            ['id' => 3,  'name' => 'Наманганская область'],
            ['id' => 4,  'name' => 'Хорезмская область'],
            ['id' => 5,  'name' => 'Ташкентская область'],
            ['id' => 6,  'name' => 'город Ташкент'],
            ['id' => 7,  'name' => 'Бухарская область'],
            ['id' => 8,  'name' => 'Самаркандская область'],
            ['id' => 9,  'name' => 'Джизакская область'],
            ['id' => 10, 'name' => 'Навоийская область'],
            ['id' => 11, 'name' => 'Каракалпакстан'],
            ['id' => 12, 'name' => 'Сырдарьинская область'],
            ['id' => 13, 'name' => 'Сурхандарьинская область'],
            ['id' => 14, 'name' => 'Кашкадарьинская область'],
            ['id' => 15, 'name' => 'Ферганская область'],
        ]);
    }
}
