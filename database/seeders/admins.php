<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admins extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "youssef",
            "email" => "youssefessam@gmail.com",
            'password' => Hash::make('01004327189'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => "joo",
            "email" => "joo@gmail.com",
            'password' =>Hash::make('01004327189'),
            'role' => 'admin'
        ]);
    }
}