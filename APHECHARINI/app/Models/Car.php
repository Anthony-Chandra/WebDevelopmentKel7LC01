<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'car_id';
    public function user()
    {
        return $this->belongsTo(User::class, 'car_owner', 'user_id');
    }
}
