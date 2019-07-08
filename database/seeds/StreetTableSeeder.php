<?php

use Illuminate\Database\Seeder;
use Encuestas\Street;
class StreetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Street::create([
        	'street'=>'3A Churchill Way',
        	'city_id'=>'1',
       	]);
       	Street::create([
           'street'=>'04 Tonbridge Rd ',
           'city_id'=>'1',
       	]);
       	Street::create([
           'street'=>'8 Carisbrooke Rd',
           'city_id'=>'3',
        ]);
        Street::create([
            'street'=>'01 Great Avenham St',
            'city_id'=>'1',
        ]);
    }
}
