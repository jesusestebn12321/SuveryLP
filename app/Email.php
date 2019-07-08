<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table='emails';
    protected $fillable = ['id','slug','email','password','name',
        'lastname','brith','status_id','gender_id'];


 	public function statu(){
    	return $this->belongsTo(Statu::class,'status_id');
    }

 	public function gender(){
    	return $this->belongsTo(Gender::class,'gender_id');
    }
	public function person(){
	    	return $this->hasMany(Person::class,'email_id');
	    }

    
}
