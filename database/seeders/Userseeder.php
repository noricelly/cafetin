<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
   
    public function run()
    {
        User::create
        ([
            'name'-> 'curso de php laravel view',
            'email'-> 'correo@.com',
            'password'-> bcrypt('123')
        ]);
    }
}
