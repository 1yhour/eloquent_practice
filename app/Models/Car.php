<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Engine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Car extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'name',
        'brand',
    ];
    public function engine(){
        return $this->hasOne(Engine::class);
    }
}
