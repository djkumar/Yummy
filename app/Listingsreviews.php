<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listingsreviews extends Model
{
    //
    protected $table = 'listings_reviews';

    public $fillable = [
    'listing_id', 'review_message','ratings','created_by'
];
}
