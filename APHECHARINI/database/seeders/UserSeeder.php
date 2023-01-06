<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@email.com',
            'phone'=>"-",
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
    }
}
