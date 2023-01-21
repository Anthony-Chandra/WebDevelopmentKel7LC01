<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
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
