<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->title = 'athlete';
        $role->save();

        $role = new Role();
        $role->title = 'couche';
        $role->save();

        $role = new Role();
        $role->title = 'admin';
        $role->save();

    }
}
