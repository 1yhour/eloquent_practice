<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Capital;
class Country extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'name',
        'code',
    ];
    public function capital(){
        return $this->hasOne(Capital::class);
    }
}
