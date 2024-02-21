<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Employee;
use App\Models\EmployeeDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        \App\Models\EmployeeDetail::factory()->count(30)->create(); 
      //  \App\Models\Employee::factory()->count(30)->create(); 
    }
}
