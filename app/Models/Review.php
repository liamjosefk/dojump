<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_review');
    }



}
