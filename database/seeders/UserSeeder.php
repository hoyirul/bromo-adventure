<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Aditya Bagus',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                'role_id' => 1,
            ],
            [
                'name' => 'Bagas Septi',
                'email' => 'staff@gmail.com',
                'password' => 'staff',
                'role_id' => 2,
            ],
        ];

        foreach($data as $row){
            User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
                'role_id' => $row['role_id'],
            ]);
        }
    }
}
