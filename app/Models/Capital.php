<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Country;
class Capital extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'country_id',
        'name',
        'population',
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
