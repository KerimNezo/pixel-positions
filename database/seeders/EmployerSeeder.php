<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employer::factory()->create([
            'name' => 'Merkator',
            'logo' => 'logo',
            'user_id' => User::factory()->create([
                'name' => 'Vladan',
                'email' => 'vladan@test.com',
                'password' => Hash::make('12345678'),
            ]),
        ])
        ->addMedia('/home/rimke/Desktop/slike/le-code.jpg')
        ->preservingOriginal()
        ->toMediaCollection('logos');
    }
}
