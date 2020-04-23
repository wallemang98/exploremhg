<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //table name
    protected $table = 'albums';
        
    //Primary Key
    public $primaryKey = 'id';
    
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}
