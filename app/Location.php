<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Location extends Model{
    protected $table='locations';
    protected $fillable = ['id','location'];
    
    public function cities(){
    	return  $this->hasMany(City::class,'location_id');
    }
}
