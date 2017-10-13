<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profiles extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'userid','first_name','last_name','user_avatar', 'address','city','zipcode', 'fbname','twittername','gplusname','instaname', 'country','company_name','phone_number'
    ];

   
}
