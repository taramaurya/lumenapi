<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;;
use Illuminate\Support\Facades\Hash;

class Employee extends Model
{
    use HasFactory;

    public $table = "employees";

    protected $fillable = [
        'name',
        'email',
        'phone','password','original_pass'
    ];
}
