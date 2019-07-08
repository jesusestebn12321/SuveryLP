<?php

use Illuminate\Database\Seeder;
use Encuestas\City;
class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'city'=>'chacao',
            'location_id'=>1,
        ]);
        City::create([
            'city'=>'Preston',
            'location_id'=>1,
        ]);
        City::create([
            'city'=>'Bristol',
            'location_id'=>1,
        ]);
        City::create([
            'city'=>'Sabana grande',
            'location_id'=>1,
        ]);
    }
}
