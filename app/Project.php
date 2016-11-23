<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    public function tasks(){
      return $this->hasMany('App\Task', 'project_id');
    }
}
