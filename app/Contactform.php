<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

Class Contactform extends Model{ 
    
    protected $tablename = 'contactform'; 
    
    public $fillable = [ 'listing_id', 'person_name', 'person_email', 'subject', 'message'];
    
}
