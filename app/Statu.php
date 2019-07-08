<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $table='status';
    protected $fillable = ['id','statu'];
    
    public function people(){
    	return $this->hasMany(Person::class,'status_id');
    } 
    public function email(){
    	return $this->hasMany(Person::class,'status_id');
    }
    public function pay(){
    	return $this->hasMany(Pay::class,'status_id');
    }
}
