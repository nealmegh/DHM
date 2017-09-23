<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domain extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'user_id', 
    'domain_name', 
    'purchased_from',
    'date_purchased', 
    'valid_till',
    'client_valid_till', 
    'hosting_provider',
    'client_hosting_provider', 
    'dns'
    
    ];
}

