<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    
    public function run()
    {
    	$role_admin    = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();


    	$admin = new User();
	    $admin->name = 'administrator';
	    $admin->email = 'admin';
	    $admin->password = bcrypt('admin');
	    $admin->division = 'test';
	    $admin->save();
	    $admin->roles()->attach($role_admin);
	    
	    $user = new User();
	    $user->name = 'user';
	    $user->email = 'user';
	    $user->password = bcrypt('user');
	    $user->division = 'user';
	    $user->save();
	    $user->roles()->attach($role_user);
	    
    }
}
