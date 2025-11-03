<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::unguard();

        User::create([
            'email' => 'admin.account@sun-asterisk.com',
            'password' => bcrypt('admin123'),
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'is_active' => true,
            'username' => 'admin-account',
            'is_admin' => true,
        ]);
    }
}
