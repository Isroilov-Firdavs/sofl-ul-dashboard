<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypesOfShipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types_of_shipments')->insert([
            ['id' => 4,  'name' => 'ДОКУМЕНТЫ'],
            ['id' => 5,  'name' => 'ЗАПЧАСТИ'],
            ['id' => 6,  'name' => 'МЕДИКАМЕНТЫ'],
            ['id' => 7,  'name' => 'ОРГТЕХНИКА'],
            ['id' => 8,  'name' => 'КНИГИ'],
            ['id' => 9,  'name' => 'СТЕКЛОИЗДЕЛИЯ'],
            ['id' => 10, 'name' => 'РЕКЛАМНЫЕ ИЗДЕЛИЯ'],
            ['id' => 11, 'name' => 'ОДЕЖДА-ОБУВИ'],
            ['id' => 12, 'name' => 'СОТ.ТЕЛЕФОН'],
            ['id' => 13, 'name' => 'ПАСПОРТ'],
            ['id' => 14, 'name' => 'ПАРФЮМЕРИЯ'],
            ['id' => 15, 'name' => 'ПРОДУКТЫ'],
            ['id' => 16, 'name' => 'ХИМИКАТЫ'],
            ['id' => 17, 'name' => 'ПРОТЕЗЫ ( ТИШ )'],
            ['id' => 18, 'name' => 'СЕМЕНА / УРУГЛАР'],
            ['id' => 19, 'name' => 'ПЛАСТИК КАРТА'],
            ['id' => 20, 'name' => 'ПЕЧАТЬ'],
            ['id' => 21, 'name' => 'САНТЕХНИКА'],
            ['id' => 22, 'name' => 'МЕБЕЛЬ'],
            ['id' => 23, 'name' => 'МЕД.ИНСТРУМЕНТ'],
            ['id' => 24, 'name' => 'ТКАНЬ - МАТЕРИАЛ'],
            ['id' => 25, 'name' => 'ОБОРУДОВАНИЕ'],
            ['id' => 26, 'name' => 'КАНЦТОВАРЫ'],
            ['id' => 27, 'name' => 'ХОЗТОВАРЫ'],
            ['id' => 28, 'name' => 'ИГРУШКИ'],
            ['id' => 29, 'name' => 'БИЖУТЕРИЯ'],
            ['id' => 30, 'name' => 'КОСМЕТИКА'],
            ['id' => 31, 'name' => 'БЫТОВАЯ ТЕХНИКА'],
            ['id' => 32, 'name' => 'СУХОФРУКТЫ'],
            ['id' => 33, 'name' => 'СТРОЙМАТЕРИАЛЫ'],
        ]);
    }
}
