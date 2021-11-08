<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            'image' => 'iniimg',
            'detail' => 'inidetail'
        ]);

        Galery::create([
            'image' => 'iniimg',
            'detail' => 'inidetail'
        ]);

        Galery::create([
            'image' => 'iniimg',
            'detail' => 'inidetail'
        ]);

        Galery::create([
            'image' => 'iniimg',
            'detail' => 'inidetail'
        ]);
    }
}
