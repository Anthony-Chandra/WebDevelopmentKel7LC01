<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'car_id' => 1,
                'user_id' => 2,
                'start_rent_date' => date('Y-m-d', strtotime(Carbon::now()->format('Y-m-d H:i:s') . ' + 2 days')),
                'end_rent_date' => date('Y-m-d', strtotime(Carbon::now()->format('Y-m-d H:i:s') . ' + 4 days')),
                'total_price' => 200000,
                'order_status' => 'Pending',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'car_id' => 3,
                'user_id' => 2,
                'start_rent_date' => date('Y-m-d', strtotime(Carbon::now()->format('Y-m-d H:i:s') . ' + 7 days')),
                'end_rent_date' => date('Y-m-d', strtotime(Carbon::now()->format('Y-m-d H:i:s') . ' + 8 days')),
                'total_price' => 100000,
                'order_status' => 'Pending',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

        ]);
    }
}
