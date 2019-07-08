<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Son extends Model{
    protected $table='sons';
    protected $fillable = ['id','dateN','person_id'];
    
    public function person(){
    	return $this->belongsTo('\SuveryLP\Person','person_id');
    }
}
