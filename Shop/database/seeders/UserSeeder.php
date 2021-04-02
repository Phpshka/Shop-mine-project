<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "admin",
            "email" => "super.admin@mail.kz",
            "password" => bcrypt("password"),
            "role_id" => Role::SUPER_ADMIN
        ]);
        User::create([
            "name" => "admin",
            "email" => "admin@mail.kz",
            "password" => bcrypt("password"),
            "role_id" => Role::ADMIN
        ]);
    }
}
