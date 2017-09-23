<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosting extends Model
{
    protected $fillable = [
    'user_id', 
    'domain_id',
    'hosting_name', 
    'hosting-package_id',
    'date_purchased', 
    'valid_till',
    'client_valid_till', 
    'hosting_provider',
    'last_backup_date', 
    'backup_location'
    ];
}
