<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
    }
}
