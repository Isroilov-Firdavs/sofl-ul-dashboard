<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class YesOrNoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('yes_or_no')->insert([
            ['values' => 1, 'descriptions' => 'Включено'],
            ['values' => 0, 'descriptions' => 'Выключенный'],
        ]);
    }
}
