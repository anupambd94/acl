<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_name',
        'parent_id',
        'description',
        'IsActive'
    ];
}
