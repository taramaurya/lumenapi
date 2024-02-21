<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskManager extends Model
{
    
   // public $table = "employees";

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'status'
    ];
}
