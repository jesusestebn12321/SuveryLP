<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Street extends Model{
    protected $table='streets';
    protected $fillable = ['id','street','city_id'];
    
    public function city(){
    	return  $this->belongsTo(City::class,'city_id');
    }
    public function person(){
    	return  $this->hasMany(Person::class,'street_id');
    }
}
