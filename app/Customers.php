<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'profile_image',
        'company',
        'contact',
        'website',
        'manager',
        'manager_id',
        'country',
        'state',
        'city',
        'address',
        'zip_code',
        'comments'


    ];
    public function projects(){
        return $this->hasMany('App\Projects');
    }
    public function getImageAttribute()
    {
    return $this->profile_image;
    }
}
