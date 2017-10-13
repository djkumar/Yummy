<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    //
        protected $table = 'brands';


      public $fillable = [
        'name','deleted'
    ];

}
