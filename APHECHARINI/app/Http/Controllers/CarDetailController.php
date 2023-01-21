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
<<<<<<< Updated upstream
=======
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
>>>>>>> Stashed changes
}
