<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = 'car_id';
    public function user()
    {
        return $this->belongsTo(User::class, 'car_owner', 'user_id');
    }
}
