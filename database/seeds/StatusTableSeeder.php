<?php

use Illuminate\Database\Seeder;
use Encuestas\Statu;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statu::create([
            'statu'=>'Casado',
        ]);
        Statu::create([
            'statu'=>'Divorsiado',
        ]);
        Statu::create([
            'statu'=>'Viudo',
        ]);
        Statu::create([
            'statu'=>'Comprometido',
        ]);
        Statu::create([
            'statu'=>'Retirado',
        ]);
        Statu::create([
            'statu'=>'Espera',
        ]);
        Statu::create([
            'statu'=>'New',
        ]);
        Statu::create([
            'statu'=>'Usado',
        ]);
        Statu::create([
            'statu'=>'Rechazado',
        ]);
    }
}
