<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'nisn' => '11111',
            'name' => 'Student Pertama',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-10-01',
            'gender_id' => '1',
            'religion_id' => '1',
        ]);

        Student::create([
            'nisn' => '11112',
            'name' => 'Student Kedua',
            'birthplace' => 'Jakarta',
            'birthdate' => '2001-11-01',
            'gender_id' => '2',
            'religion_id' => '2',
        ]);

        Student::create([
            'nisn' => '11113',
            'name' => 'Student Ketiga',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender_id' => '2',
            'religion_id' => '3',
        ]);
    }
}
