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
            'role_id' => '1',
            'name' => 'Vincent',
            'username' => 'admin',
            'password' => 'qqqqq'
            
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Vincent admin',
            'username' => 'admin2',
            'password' => 'qqqqq'
            
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Vincent admin2',
            'username' => 'admin3',
            'password' => 'qqqqq'
            
        ]);
    }
}
