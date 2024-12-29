<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@bemfasilkom.com',
            'password' => bcrypt('bemfasilkom2021'),
        ]);

        $admin->assignRole('admin');
    }
}
