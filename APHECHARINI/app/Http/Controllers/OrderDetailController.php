<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\History;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderDetailController extends Controller
{
    public function index($order_id)
    {
        $order = Order::find($order_id);
        $diff = strtotime($order->end_rent_date) - strtotime($order->start_rent_date);
        $order->duration = abs(round($diff / 86400));
        return view('orderDetail')->with('order', $order);
    }
    public function update(Request $request){
        $mytime = Carbon::now()->toDateString();
        $request->validate([
            'orderID' => 'required|integer',
            'carID' => 'required|integer',
            'startDate' => 'required|after:' . $mytime,
            'duration' => 'required|integer|gt:0'
        ]);
        $end_date = date('Y-m-d', strtotime($request->startDate . ' + ' . $request->duration . ' days'));
        $start_date = $request->startDate;
        $history = History::whereBetween('start_rent_date', [$start_date, $end_date])
        ->orWhereBetween('end_rent_date', [$start_date, $end_date])
        ->orWhereRaw('? BETWEEN start_rent_date and end_rent_date', [$start_date])
        ->orWhereRaw('? BETWEEN start_rent_date and end_rent_date', [$end_date])->pluck('history_id');
        $history = History::where('car_id', $request->carID)
        ->where('status', 'Accepted')
        ->whereIn('history_id', $history)->first();

        $order = Order::whereBetween('start_rent_date', [$start_date, $end_date])
        ->orWhereBetween('end_rent_date', [$start_date, $end_date])
        ->orWhereRaw('? BETWEEN start_rent_date and end_rent_date', [$start_date])
        ->orWhereRaw('? BETWEEN start_rent_date and end_rent_date', [$end_date])->pluck('order_id');
        $order = Order::where('car_id', $request->carID)
        ->whereIn('order_id', $order)->first();
        if (!$order && !$history) {
            $order = Order::find($request->orderID);
            $total_price = $request->duration * $order->car->price;
            $order->start_rent_date = $start_date;
            $order->end_rent_date = $end_date;
            $order->total_price = $total_price;
            $order->save();
            return redirect('/orderDetail/' . $request->orderID)->with('success', 'Order has been updated');
        }
        return redirect('/orderDetail/' . $request->orderID)->with('error', 'Date is overlapping with other order');
    }
    public function delete(Request $request){
        $order_id = $request->orderID;
        $order = Order::find($order_id)->delete();
        return redirect('/orders')->with('success', 'Order has been deleted');
    }
}
