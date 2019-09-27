<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $fillable = [
        'section_name',
        'section_description',
        'department_id',
        'IsActive',
    ];

    public function department(){
        return $this->belingsTo('App\Departments');
    }
}
