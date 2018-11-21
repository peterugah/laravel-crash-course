<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    //
    protected $hidden = ['created_at' , 'updated_at' , 'project_id'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
