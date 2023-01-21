<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function lessorHistory(){
        $cars = Car::where('car_owner', auth()->user()->user_id)->pluck('car_id');
        $histories = History::whereIn('car_id', $cars)->get();
        return view('history')->with('histories', $histories);
    }
    public function lesseHistory(){
        $histories = History::where('renter_id', auth()->user()->user_id)->get();
        return view('history')->with('histories', $histories);
    }
    public function historyDetail($history_id){
        $history = History::find($history_id);
        return view('historyDetail')->with('history', $history);
    }
}
