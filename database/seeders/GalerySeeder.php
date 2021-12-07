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
            'image' => 'iniimg1',
            'title' => 'inititle1'
        ]);

        Galery::create([
            'image' => 'iniimg2',
            'title' => 'inititle2'
        ]);

        Galery::create([
            'image' => 'iniimg',
            'title' => 'inititle3'
        ]);

        Galery::create([
            'image' => 'iniimg',
            'title' => 'inititle4'
        ]);
    }
}
