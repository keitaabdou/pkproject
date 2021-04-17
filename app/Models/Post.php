<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasFactory;
    //Table name

    //protected $table = 'post';
    //primary key
    //public $primaryKey = 'id';
    //timestamps = false

    //public $timestamps = false;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
