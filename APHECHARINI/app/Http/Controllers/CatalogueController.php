<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('catalogue')->with('cars', $cars);
    }
}
