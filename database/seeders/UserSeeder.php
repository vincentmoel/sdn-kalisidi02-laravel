<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'role_id' => '1',
            'name' => 'Vincent',
            'username' => 'admin',
            'password' => Hash::make('qqqqq')
            
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Vincent admin',
            'username' => 'admin2',
            'password' => Hash::make('qqqqq')

            
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Vincent admin2',
            'username' => 'admin3',
            'password' => Hash::make('qqqqq')

            
        ]);
    }
}
