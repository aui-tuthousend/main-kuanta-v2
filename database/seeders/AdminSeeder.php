<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $userdata = [
            [
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> bcrypt('5656'),
                'nomor'=> '081334327567',
                'circle'=> 'admin',
            ],
            [
                'name'=> 'CEO',
                'email'=> 'ceo@gmail.com',
                'password'=> bcrypt('5656'),
                'nomor'=> '085692544500',
                'circle'=> 'executive',
            ],
        ];

        foreach ($userdata as $key => $val){
            User::create($val);
        }
    }
}
