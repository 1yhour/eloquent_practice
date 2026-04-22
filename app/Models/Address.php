<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User1;
class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'city',
        'country',
        'street',
    ];
    public function user(){
        return $this->belongsTo(User1::class, 'user_id');//to spacify the column name for the foreign key 
    }
}
