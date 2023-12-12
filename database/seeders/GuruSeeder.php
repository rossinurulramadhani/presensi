<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
          $user::create([
            'name'         => 'Guru',
            'email'        => 'guru@gmail.com',
            'password'     => Hash::make('12345678'),
            'role_id'      => 3,
            ]);
    }
}
