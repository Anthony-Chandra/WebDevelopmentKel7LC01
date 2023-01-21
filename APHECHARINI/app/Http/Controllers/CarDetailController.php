<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CarDetailController extends Controller
{
    public function index($car_id){
        $car = Car::where('car_id', $car_id)->first();
        return view('cardetail')->with('car', $car);
    }
    public function rent(Request $request){
        $mytime = Carbon::now()->toDateString();
        $request->validate([
            'carID' => 'required|integer',
            'startDate' => 'required|after:'.$mytime,
            'duration' => 'required|integer|gt:0'
        ]);
        $end_date = date('Y-m-d', strtotime($request->startDate . ' + '.$request->duration.' days'));
        $start_date = $request->startDate;
        $order = Order::whereBetween('start_rent_date',[$start_date, $end_date])
        ->orWhereBetween('end_rent_date',[$start_date, $end_date])
        ->orWhereRaw('? BETWEEN start_rent_date and end_rent_date', [$start_date])
        ->orWhereRaw('? BETWEEN start_rent_date and end_rent_date', [$end_date])->first();

        if(!$order){
            $car = Car::find($request->carID);
            $user_id = auth()->user()->user_id;
            $total_price = $request->duration * $car->price;
            $order = new Order([
                'car_id' => $request->carID,
                'user_id' => $user_id,
                'start_rent_date' => $start_date,
                'end_rent_date' => $end_date,
                'total_price' => $total_price,
                'order_status' => 'Pending',
            ]);
            $order->save();
            return redirect('/detail/' . $request->carID)->with('success', 'Order has been made');
        }
        return redirect('/detail/' . $request->carID)->with('error', 'Date is overlapping with other order');
    }
    public function editForm(Request $request){
        $request->validate([
            'carID' => 'required|integer',
            'seats' => 'required|lt:10',
            "status"=> 'required',
            "desc" => 'required|min:5',
            "price" => 'required'
        ]);
        $car = Car::find($request->carID);

        if($car->car_owner == auth()->user()->user_id){
            $car->seats = $request->seats;
            $car->status = $request->status;
            $car->description = $request->desc;
            $car->price = $request->price;
            $car->save();
            return redirect('/detail/'.$request->carID)->with('success', 'Vehicle data has been updated');
        }else{
            return redirect('/detail/'.$request->carID)->with('error', 'The vehicle is not yours');
        }
    }
}
