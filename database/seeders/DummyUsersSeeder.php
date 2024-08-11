<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
        [
            'name'=>'user234',
            'email'=>'user234@gmail.com',
            'role'=>'user',
            'password'=> bcrypt('user234')
        ],
        [
            'name'=>'admin234',
            'email'=>'admin234@gmail.com',
            'role'=>'admin',
            'password'=> bcrypt('admin234')
        ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}