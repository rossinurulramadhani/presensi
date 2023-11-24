<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
        //
        $user::create([
            'name'         => 'Admin',
            'email'        => 'admin@gmail.com',
            'password'     => Hash::make('12345678'),
            'role_id'      => 2,
            ]);

        
    }
}