<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create(
            [
                'role' => 'teacher'
            ]
        );
        User::factory()->count(10)->create(
            [
                'role' => 'student'
            ]
        );
        User::create([
            'username' => 'rangga',
            'fullname' => 'rangga aristianto',
            'email' => 'ranggaart@mail.com',
            'password' => Hash::make('12345678'),
            'role' => 'teacher'
        ]);
        User::create([
            'username' => 'budi',
            'fullname' => 'budi',
            'email' => 'budi@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'student'
        ]);
    }
}