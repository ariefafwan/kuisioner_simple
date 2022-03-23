<?php

namespace Database\Seeders;

use App\Models\Dosen;


use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'name' => 'Rizky Putra Fhonna',
            'nip' => '12345',
            'prodi_id' => '1',
            'user_id' => '2',
        ]);
    }
}
