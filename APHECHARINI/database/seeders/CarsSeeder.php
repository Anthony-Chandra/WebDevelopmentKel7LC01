<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        DB::table('cars')->insert([
            [
                'car_name' => 'Pajero Sport 2016',
                'car_owner' => 3,
                'seats' => 8,
                'transmission' => 'Manual',
                'price' => 100000,
                'description' => $faker->text(400),
                'car_picture' => 'pajero.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'car_name' => 'Yarris 2016',
                'car_owner' => 3,
                'seats' => 5,
                'transmission' => 'Automatic',
                'price' => 100000,
                'description' => $faker->text(400),
                'car_picture' => 'yaris.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'car_name' => 'Avanza 2016',
                'car_owner' => 4,
                'seats' => 8,
                'transmission' => 'Automatic',
                'price' => 100000,
                'description' => $faker->text(400),
                'car_picture' => 'avanza.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
