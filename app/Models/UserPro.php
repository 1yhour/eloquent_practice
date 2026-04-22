<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
class UserPro extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
    ];
    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
