<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosting-package extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'package_name', 
    'package_price' 
        
    ];
}
