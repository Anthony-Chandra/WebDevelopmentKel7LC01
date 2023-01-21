<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnedCarsController extends Controller
{
    public function index()
    {
        $
        $car = Car::where('car_id', $car_id)->first();
        return view('cardetail')->with('car', $car);
    }
}
