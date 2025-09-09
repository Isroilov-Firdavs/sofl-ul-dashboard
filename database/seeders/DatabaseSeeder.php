<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CitiesSeeder;
use Database\Seeders\RegionsSeeder;
use Database\Seeders\YesOrNoSeeder;
use Database\Seeders\PackagingSeeder;
use Database\Seeders\StatusListSeeder;
use Database\Seeders\TypesOfShipmentsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Avval Regions
        $this->call(RegionsSeeder::class);

        // Keyin Cities
        $this->call(CitiesSeeder::class);

        // Qolgan seederlar
        $this->call(UserSeeder::class);
        $this->call(TypesOfShipmentsSeeder::class);
        $this->call(PackagingSeeder::class);
        $this->call(YesOrNoSeeder::class);
        $this->call(StatusListSeeder::class);
    }
}
