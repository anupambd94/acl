<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = [
        'department_name',
        'department_description',
        'IsActive',
    ];

    public function sections(){
        return $this->hasMany('App\Sections');
    }
}
