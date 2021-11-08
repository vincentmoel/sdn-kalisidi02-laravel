<?php

namespace Database\Seeders;

use App\Models\Galery;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            RoleSeeder::class,
            ReligionSeeder::class,
            PositionSeeder::class,
            NewsSeeder::class,
            GenderSeeder::class,
            GalerySeeder::class,



        ]);
    }
}
