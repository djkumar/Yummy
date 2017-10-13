<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

Class Subscriptions extends Model { 
 
 protected $table = 'subscriptions';
 public $fillable = ['name','descriptions','days','amount'];
}
?>