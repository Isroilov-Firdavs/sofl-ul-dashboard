<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackagingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packaging')->insert([
            ['id' => 4, 'name' => 'СУМКА'],
            ['id' => 5, 'name' => 'КОНТЕЙНЕР'],
            ['id' => 6, 'name' => 'КОНВЕРТ'],
            ['id' => 7, 'name' => 'КОРОБКА'],
            ['id' => 8, 'name' => 'BTS ПАКЕТИ'],
            ['id' => 9, 'name' => 'БЕЗ УПАКОВКИ'],
            ['id' => 10, 'name' => 'ЗAВОДСКAЯ УПAКОВКA'],
        ]);
    }
}
