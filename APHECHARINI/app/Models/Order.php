<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = ['car_id', 'user_id', 'start_rent_date', 'end_rent_date', 'total_price', 'order_status'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'car_id');
    }
}
