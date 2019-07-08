<?php

use Illuminate\Database\Seeder;
use Encuestas\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Jesus',
            'lastname'=>'Villalta',
            'email'=>'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
