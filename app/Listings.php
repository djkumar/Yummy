<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    //
    protected $table = 'listings';

    
    public $fillable = [
    'listing_name', 'listing_tag','listing_logo', 'listing_desc','listing_category','contact_number','latitude','longitude','city','country','state','address','zipcode', 'website','fbname','twittername','gplusname','gallery','start_day','end_day','start_time','end_time','created_by'

];
}
