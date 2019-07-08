<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class City extends Model{
    protected $table='cities';
    protected $fillable = ['id','city','location_id'];
    
    public function Location(){
    	return  $this->belongsTo(Location::class,'location_id');
    }
    public function Streets(){
    	return  $this->hasMany(Street::class,'city_id');
    }
}
