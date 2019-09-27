<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designations extends Model
{
    protected $fillable = [
        'designation_id',
        'designation_name',
        'designation_description',
        'IsActive',

    ];
}
