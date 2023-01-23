<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index(){
        $cars = Car::where('status', 'Available')->get();
        return view('catalogue')->with('cars', $cars);
    }
    public function searching(Request $request){
        $cars = Car::where('car_name', 'LIKE', '%'.$request->searchBar.'%')
        ->where('status', 'Available')->get();
        return view('catalogue')->with('cars', $cars);
    }
}
