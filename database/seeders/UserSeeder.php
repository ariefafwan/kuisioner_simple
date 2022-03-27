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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => '1',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Afwan',
            'email' => 'teuku.180180057@mhs.unimal.ac.id',
            'role_id' => '2',
            'password' => bcrypt('password'),
        ]);
    }
}
