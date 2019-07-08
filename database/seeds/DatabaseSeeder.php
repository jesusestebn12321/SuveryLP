<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(StreetTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(EmailTableSeeder::class);
        $this->call(PersonTableSeeder::class);
    }
}
