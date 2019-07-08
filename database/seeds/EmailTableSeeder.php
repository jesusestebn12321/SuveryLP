<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str as Str;
use Encuestas\Email;
class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get("database/uk/email.json");
        $data=json_decode($json);
        foreach ($data as $obj) {
            Email::create(array(
                "id"=>$obj->id,
                "slug"=> str_slug($obj->name.'-'.$obj->lastname.'_'.$obj->id), 
                "email"=>$obj->email,
                "password"=>$obj->password,
                "name"=>$obj->name,
                "lastname"=>$obj->lastname,
                "brith"=>$obj->brith,
                "status_id"=>$obj->status_id,
                "gender_id"=>$obj->gender_id
            ));
        }
    }
}
