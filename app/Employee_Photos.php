<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Photos extends Model
{
    protected $fillable = [
        'photo_name',
        'photo_type',
        'photo_size',  
         'IsActive'
    ];
}
