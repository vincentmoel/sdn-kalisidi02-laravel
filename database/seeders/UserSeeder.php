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
            'nisn' => '11111',
            'name' => 'Student Pertama',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-10-01',
            'gender_id' => '1',
            'religion_id' => '1',
        ]);
    }
}
