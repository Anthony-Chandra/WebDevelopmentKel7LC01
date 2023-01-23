<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $primaryKey = 'history_id';
    protected $fillable = ['car_id', 'renter_id', 'start_rent_date', 'end_rent_date', 'total_price', 'status'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'renter_id', 'user_id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'car_id')->withTrashed();
    }
    use HasFactory;
}
