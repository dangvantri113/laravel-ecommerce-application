<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    $role_manager = new Role();
	    $role_manager->name = 'admin';
	    $role_manager->save();

        $role_employee = new Role();
        $role_employee->name = 'user';
        $role_employee->save();

    }
}
