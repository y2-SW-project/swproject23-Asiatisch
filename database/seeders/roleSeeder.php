<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An Administrator';
        $role_admin->save();

        $role_user = new role();
        $role_user->name = 'user';
        $role_user->description = 'A user';
        $role_user->save();
        

    }

  
}
