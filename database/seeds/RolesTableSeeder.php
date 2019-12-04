<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Jr. Dev', 'Sr. Dev', 'Team Lead', 'Manager'])->each(function($role){
            Role::create(['name' => $role]);
        });
    }
}
