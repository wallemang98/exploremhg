<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //table name
    protected $table = 'photos';
        
    //Primary Key
    public $primaryKey = 'id';
    
    //Timestamps
    //public $timestamps = true;
    
    public function album(){
        return $this->belongsTo('App\Album');
    }
}
