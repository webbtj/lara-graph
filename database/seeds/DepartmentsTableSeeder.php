<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Web', 'iOS', 'Android', 'Games'])->each(function($department){
            Department::create(['name' => $department]);
        });
    }
}
