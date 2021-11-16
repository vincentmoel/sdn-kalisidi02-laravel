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
            'gender' => 'L',
            'religion_id' => '1',
        ]);

        Student::create([
            'nisn' => '11112',
            'name' => 'Student Kedua',
            'birthplace' => 'Jakarta',
            'birthdate' => '2001-11-01',
            'gender' => 'P',
            'religion_id' => '2',
        ]);

        Student::create([
            'nisn' => '11113',
            'name' => 'Student Ketiga',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '3',
        ]);


        Student::create([
            'nisn' => '11114',
            'name' => 'Student 4',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '3',
        ]);

        Student::create([
            'nisn' => '11115',
            'name' => 'Student 5',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '3',
        ]);

        Student::create([
            'nisn' => '11116',
            'name' => 'Student 6',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '2',
        ]);

        Student::create([
            'nisn' => '11117',
            'name' => 'Student 7',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '3',
        ]);

        Student::create([
            'nisn' => '11118',
            'name' => 'Student 8',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '1',
        ]);

        Student::create([
            'nisn' => '11119',
            'name' => 'Student 9',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '2',
        ]);

        Student::create([
            'nisn' => '11120',
            'name' => 'Student 10',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '6',
        ]);

        Student::create([
            'nisn' => '11121',
            'name' => 'Student 11',
            'birthplace' => 'Semarang',
            'birthdate' => '2001-12-01',
            'gender' => 'L',
            'religion_id' => '4',
        ]);
    }
}
