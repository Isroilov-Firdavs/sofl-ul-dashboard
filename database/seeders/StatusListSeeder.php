<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_list')->insert([
            ['id' => -1, 'info' => 'Черновик'],
            ['id' => 0, 'info' => 'Отказ'],
            ['id' => 1, 'info' => 'У отправителя'],
            ['id' => 2, 'info' => 'Курьер принял'],
            ['id' => 3, 'info' => 'В офисе отправления'],
            ['id' => 4, 'info' => 'В офисе доставки'],
            ['id' => 5, 'info' => 'Курьер доставляет'],
            ['id' => 6, 'info' => 'Доставлен'],
            ['id' => 7, 'info' => 'Возврат'],
            ['id' => 8, 'info' => 'В промежуточном офисе'],
            ['id' => 10, 'info' => 'В сортировочном центре (РЦ)'],
            ['id' => 31, 'info' => 'На складе'],
            ['id' => 32, 'info' => 'В мешке'],
            ['id' => 33, 'info' => 'В перевозке'],
            ['id' => 34, 'info' => 'В РЦ Курьера'],
        ]);
    }
}
