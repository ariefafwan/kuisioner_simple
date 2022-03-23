<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Seeder;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jawaban::create([
            'jawaban' => 'Yes',
        ]);

        Jawaban::create([
            'jawaban' => 'No',
        ]);

        Jawaban::create([
            'jawaban' => 'Partials',
        ]);
    }
}
