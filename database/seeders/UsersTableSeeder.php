<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'milton2913@gmail.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'verified'           => 1,
                'verified_at'        => '2022-02-01 07:48:34',
                'verification_token' => '',
                'approved'           => 1,
            ],
            [
                'id'             => 2,
                'name'           => 'Parent',
                'email'          => 'parent@localhost.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'verified'           => 1,
                'verified_at'        => '2022-02-01 07:48:34',
                'verification_token' => '',
                'approved'           => 1,
            ],
        ];

        User::insert($users);
    }
}
