<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
   protected $table = 'category';

   public $fillable = ['category_name'];
}
