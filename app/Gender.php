<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model{
    protected $table='genders';
    protected $fillable = ['id','gender'];
    
    public function people(){
    	return $this->hasMany(Person::class,'gender_id');
    }
    public function email(){
    	return $this->hasMany(Email::class,'gender_id');
    }
}
