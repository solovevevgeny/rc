<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Evgeny";
        $user->sname = "Solovev";
        $user->email = "evgeny.solovev@gmail.com";
        $user->phone = "+79217767606";
        $user->password = Hash::make('password');
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Alexander";
        $user->sname = "Naumenko";
        $user->email = "alex.n@gmail.com";
        $user->phone = "+71231231313";
        $user->password = Hash::make('password');
        $user->role_id = 2;
        $user->save();
    }
}
