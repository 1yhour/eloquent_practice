<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Engine extends Model
{
    use HasFactory;
    protected $fillable=[
        'engine_number',
        'type',
        'car_id',
    ];
    public function car(){
        return $this->belongsTo(Car::class);

    }
}
