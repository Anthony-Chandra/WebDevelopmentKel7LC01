<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\History;
use App\Models\Order;
use Illuminate\Http\Request;

class PendingOrderController extends Controller
{
    public function index()
    {
        $cars = Car::where('car_owner', auth()->user()->user_id)->pluck('car_id');
        $orders = Order::whereIn('car_id', $cars)->get();
        return view('pendingorder')->with('orders', $orders);
    }
    public function accept(Request $request){
        $request->validate([
            'orderID' => 'required|integer'
        ]);
        $order = Order::find($request->orderID);
        $history = new History([
            'car_id' => $order->car_id,
            'renter_id' => $order->user_id,
            'start_rent_date' => $order->start_rent_date,
            'end_rent_date' => $order->end_rent_date,
            'total_price' => $order->total_price,
            'status' => "Accepted"
        ]);
        $history->save();
        $order->delete();
        return redirect('/pendingOrder')->with('success', 'Order Has Been Accepted');
    }
    public function decline(Request $request)
    {
        $request->validate([
            'orderID' => 'required|integer'
        ]);
        $order = Order::find($request->orderID);
        $history = new History([
            'car_id' => $order->car_id,
            'renter_id' => $order->user_id,
            'start_rent_date' => $order->start_rent_date,
            'end_rent_date' => $order->end_rent_date,
            'total_price' => $order->total_price,
            'status' => "Declined"
        ]);
        $history->save();
        $order->delete();
        return redirect('/pendingOrder')->with('error', 'Order Has Been Declined');
    }
}
