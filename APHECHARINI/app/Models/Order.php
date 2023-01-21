<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = ['car_id', 'start_rent_date', 'end_rent_date', 'total_price', 'order_status'];
    
    use HasFactory;
}
