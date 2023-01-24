<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OwnedCarsController extends Controller
{
    public function index()
    {
        $cars = Car::where('car_owner', auth()->user()->user_id)->get();
        return view('ownedcars')->with('cars', $cars);
    }

    public function addVehicle(){
        return view('addVehicle');
    }

    public function doAddVehicle(Request $req){
        $req->validate([
            'car_name' => 'required|min:3',
            'transmission' => 'required',
            'seat' => 'required|lt:10',
            'status' => 'required',
            'description' => 'required|min:5',
            'price' => 'required|numeric|lt:999999',
            'car_image' => 'required|mimes:jpg,jpeg,png,gif'
        ]);
        $vehicle = new Car();
        $insert_id = $vehicle->getNextID();
        $image = $req->file('car_image');
        $extension = $req->file('car_image')->getClientOriginalExtension();
        $imageName = $insert_id.'.'.$extension;

        Storage::putFileAs('/public/Vehicle',$image,$imageName);
        $vehicle->car_picture = $imageName;
        $vehicle->car_owner = auth()->user()->user_id;
        $vehicle->car_name = $req->car_name;
        $vehicle->transmission = $req->transmission;
        $vehicle->seats = $req->seat;
        $vehicle->status = $req->status;
        $vehicle->price = $req->price;
        $vehicle->description = $req->description;
        $vehicle->save();
        return redirect('ownedCars');
    }
}
