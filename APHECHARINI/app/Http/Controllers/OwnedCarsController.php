<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class OwnedCarsController extends Controller
{
    public function index()
    {
        $cars = Car::where('car_owner', auth()->user()->user_id)->get();
        return view('ownedcars')->with('cars', $cars);
    }
}
