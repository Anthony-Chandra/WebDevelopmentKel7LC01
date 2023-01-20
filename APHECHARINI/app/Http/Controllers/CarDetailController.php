<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    public function index($car_id){
        $car = Car::where('car_id', $car_id)->first();
        return view('cardetail')->with('car', $car);
    }
}
