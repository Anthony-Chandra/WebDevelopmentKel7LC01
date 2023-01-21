<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
}
