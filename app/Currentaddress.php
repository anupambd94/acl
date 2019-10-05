<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currentaddress extends Model
{
    public $table = "currentaddress";
    protected $fillable = [
        'address_1',
        'address_2',
        'city',
        'state',
        'country_id',
        'postal_code',
        // $table->timestamp('CreationDate')->default(DB::raw('CURRENT_TIMESTAMP'));
        'IsActive'
    ];
}
