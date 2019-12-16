<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $primaryKey = 'transaction_id';
    protected $fillable = [
        'transaction_name',
        'parent_id',
        'color',
        'budget',
        'IsActive'
    ];
}
