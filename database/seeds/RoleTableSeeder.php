<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{

        public function run()
		  {

		  	$role_admin = new Role();
		    $role_admin->name = 'admin';
		    $role_admin->description = 'An Administrator';
		    $role_admin->save();

		    $role_user = new Role();
		    $role_user->name = 'user';
		    $role_user->description = 'A User';
		    $role_user->save();
		   

		  }
    
}
