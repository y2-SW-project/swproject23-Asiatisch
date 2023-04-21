<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //get the admin role from the role table. Later(line 31) attach this role to a user
         $role_admin = Role::where('name', 'admin')->first();

         //get the user role from the role table. Later(line 42) attach this role to a user
         $role_user = Role::where('name', 'user')->first();

         $admin = new User();
         $admin->name = 'Shem Resc';
         $admin->email = 'Shem@Resc.ie';
         $admin->password = Hash::make('password');
         $admin->save();

         // attach the admin role to the user that was created above.
         $admin->roles()->attach($role_admin);


         $user = new User();
         $user->name = 'John Jones';
         $user->email = 'john@larafest.ie';
         $user->password = Hash::make('password');
         $user->save();
         //attach the user role to this user.
         $user->roles()->attach($role_user);
     }
    }

