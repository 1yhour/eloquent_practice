<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserPro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Profile extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        "user_pro_id",
        "bio",
        "phone",
    ];
    public function userPro(){
        return $this->belongsTo(UserPro::class);
    }
}
