<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create(
            [
            'name' => 'BongTer',
            'email' => 'xbongter@gmail.com',
            'password' => bcrypt('123456789'),
            'class_creator' => 1
            ]
        );

        $admin->roles()->attach($adminRole);


        $admin = User::create(
            [
                'name' => 'Mengkheang',
                'email' => 'mengkheang@gmail.com',
                'password' => bcrypt('123456789'),
                'class_creator' => 1
            ]
        );

        $admin->roles()->attach($adminRole);

        $user = User::create([
            'name' => 'Linada',
            'email' => 'linada@gmail.com',
            'password' => bcrypt('123456789'),
            'class_creator' => 0
        ]);

        $user->roles()->attach($userRole);
    }
}
