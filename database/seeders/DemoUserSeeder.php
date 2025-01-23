<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoUserSeeder extends Seeder
{
    public function run(): void
    {

        User::factory(10)->create();

        // create demo user
        User::create(
            [
                'name' => 'Admin',
                'user_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin1234'),
            ]
        );
    }
}

// email: admin@finnaf.com
// password: **finnaf**
