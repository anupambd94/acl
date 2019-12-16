<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $primaryKey = 'item_id';
    protected $fillable = [
        'item_name',
        'item_amount',
        'item_quantity',
        'barcode',
        'transaction',
        'IsAllowCommission',
        'IsApproved',
        'IsActive'
    ];

    
}
