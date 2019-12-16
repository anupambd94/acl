<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $primaryKey = 'discount_id';
    protected $fillable = [
        'discount_name',
        'discount_value',
        'discount_maxvalue',
        'describtion',
        'IsActive'
    ];

    public function items()
    {
        return $this->belongsToMany(Items::class);
    }
}
