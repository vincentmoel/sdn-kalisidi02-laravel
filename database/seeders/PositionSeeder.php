<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'Kepala Sekolah',
        ]);

        Position::create([
            'name' => 'Wakil Kepala Sekolah',
        ]);

        Position::create([
            'name' => 'Guru',
        ]);

        Position::create([
            'name' => 'Staff',
        ]);
    }
}
