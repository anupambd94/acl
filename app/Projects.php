<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $primaryKey = 'project_id';
    protected $fillable = [
          'project_id',
          'project_name',
          'cost',
          'description',
          'customer_id',
          'IsActive'
    ];
    public function customer(){
        return $this->belingsTo('App\Customers');
    }
    public function tasks(){
        return $this->hasMany('App\Tasks');
    }

}
