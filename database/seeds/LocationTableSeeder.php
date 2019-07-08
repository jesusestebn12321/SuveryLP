<?php

use Illuminate\Database\Seeder;
use Encuestas\Location;
class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Location::create([
        'location'=>'England',
    ]);
    }
}
