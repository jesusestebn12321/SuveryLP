<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str as Str;
use Encuestas\Person;
class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $json=File::get("database/uk/people.json");
        $data=json_decode($json);
        foreach ($data as $obj) {
            Person::create(array(
                "id"=>$obj->id,
                "slug"=> str_slug($obj->brith.'-'.$obj->email_id.'_'.$obj->id), 
                "email_id"=>$obj->email_id,
                "password"=>$obj->password,
                "brith"=>$obj->brith,
                "last_login"=>$obj->last_login,
                "code"=>$obj->code,
                "seregins"=>$obj->seregins,
                "cookies"=>$obj->cookies,
                "status_id"=>$obj->status_id,
                "street_id"=>$obj->street_id,
                "working"=>$obj->working,
                "gender_id"=>$obj->gender_id
            ));
        }
    }
}
