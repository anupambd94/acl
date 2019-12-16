<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionMode extends Model
{
    protected $primaryKey = 'transaction_mode_id';
    protected $fillable = [
        'transaction_mode',
        'IsActive'
    ];
}
