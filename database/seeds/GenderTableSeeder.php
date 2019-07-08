<?php

use Illuminate\Database\Seeder;
use Encuestas\Gender;
class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'gender'=>'male',
        ]);
        Gender::create([
            'gender'=>'female',
        ]);
        Gender::create([
            'gender'=>'otro',
        ]);
    }
}
