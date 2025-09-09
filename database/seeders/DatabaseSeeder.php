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
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            RegionsSeeder::class,
            CitiesSeeder::class,
            PackagingSeeder::class,
            RegionsSeeder::class,
            StatusListSeeder::class,
            TypesOfShipmentsSeeder::class,
            YesOrNoSeeder::class,
        ]);
    }
}
