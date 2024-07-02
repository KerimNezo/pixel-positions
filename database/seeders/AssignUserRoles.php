<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AssignUserRoles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::where('email', 'vladan@test.com')->first();
        $adminUser->assignRole('admin');

        $employerUser = User::where('email', 'test@example.com')->first();
        $employerUser->assignRole('employer');
    }
}
