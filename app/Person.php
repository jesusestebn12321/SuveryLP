<?php

namespace SuveryLP;
use Illuminate\Database\Eloquent\Model;

class Person extends Model{
    protected $table='people';
    protected $fillable = ['id','slug','email_id','password','brith',
    'last_login','working','seregins',
        'cookies','status_id','street_id','code','gender_id'];
    
    public function statu(){
    	return $this->belongsTo('\SuveryLP\Statu','status_id');
    }
    public function street(){
    	return $this->belongsTo(Street::class,'street_id');
    }

    public function gender(){
    	return $this->belongsTo(Gender::class,'gender_id');
    }
    public function email(){
        return $this->belongsTo(Email::class,'email_id');
    }
    public function sons(){
        return $this->hasMany(Son::class,'person_id');
    }
    public function pay(){
        return $this->hasMany(Pay::class,'person_id');
    }
}
