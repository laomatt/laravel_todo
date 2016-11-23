<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $table = 'tasks';
  protected $fillable = ['name', 'description', 'project_id', 'created_at', 'updated_at'];
  public function project(){
    return $this->belongsTo('App\Project', 'project_id');
  }
}
