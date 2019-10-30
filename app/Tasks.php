<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $primaryKey = 'task_id';
    protected $fillable = [
        'task_id',
        'start_date',
        'end_date',
        'project_id',
        'project_status',
        'IsActive'
  ];
  public function projects(){
    return $this->belingsTo('App\Projects');
}
public function employees()
    {
        return $this->belongsToMany(Employees::class);
    }
}
