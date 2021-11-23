<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'user'],
            ['name' => 'admin'],
            ['name' => 'guest']
        ];

        \App\Models\User_types::insert($data);
    }
}
