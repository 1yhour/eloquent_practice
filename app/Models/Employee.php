<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Id_card;
class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];
    use HasFactory;
    public function idCard(){
        return $this->hasOne(Id_card::class);
    }
}
