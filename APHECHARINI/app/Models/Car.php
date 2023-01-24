<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'car_id';
    public function user()
    {
        return $this->belongsTo(User::class, 'car_owner', 'user_id');
    }
    public function getNextID(){
        $statement = DB::select("show table status like 'cars'");

        return $statement[0]->Auto_increment;
    }
}
