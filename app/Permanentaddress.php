<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permanentaddress extends Model
{
    public $table = "permanentaddress";
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
