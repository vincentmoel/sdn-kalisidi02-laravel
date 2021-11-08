<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name' => 'Guru1',
            'image' => 'imgGuru1',
            'position_id' => '1',
            'nip' => '001'
        ]);

        Teacher::create([
            'name' => 'Guru2',
            'image' => 'imgGuru2',
            'position_id' => '2',
            'nip' => '002'
        ]);

        Teacher::create([
            'name' => 'Guru3',
            'image' => 'imgGuru3',
            'position_id' => '3',
            'nip' => '003'
        ]);

        Teacher::create([
            'name' => 'Guru4',
            'image' => 'imgGuru4',
            'position_id' => '4',
            'nip' => '004'
        ]);
    }
}
