<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeDetail extends Model
{
    use HasFactory;
    public $table = "employeeDetails";

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}
