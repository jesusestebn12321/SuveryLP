<?php

namespace SuveryLP;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model{
    protected $table='pays';
    protected $fillable = ['id','GC','pedido','valor','person_id','status_id'];
    
    public function person(){
    	return  $this->belongsTo(Person::class,'person_id');
    }
    public function status(){
    	return  $this->belongsTo(Statu::class,'status_id');
    }
}
