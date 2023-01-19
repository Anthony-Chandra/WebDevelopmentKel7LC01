<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        User::truncate();
        DB::table('users')->insert([[
            'username' => 'Admin',
            'email' => 'admin@email.com',
            'phone'=>"-",
            'password' => Hash::make('admin'),
            'role' => 'Admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], [
                'username' => 'Lesse1',
                'email' => 'lesse1@email.com',
                'phone' => "081232131231",
                'password' => Hash::make('lesse1'),
                'role' => 'Lesse',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], [
                'username' => 'Lessor1',
                'email' => 'lessor1@email.com',
                'phone' => "021312312",
                'password' => Hash::make('lessor1'),
                'role' => 'Lessor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
