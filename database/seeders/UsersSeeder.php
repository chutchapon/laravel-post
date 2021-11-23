<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\Users();
        $user->user_type_id = 2;
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }
}