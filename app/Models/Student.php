<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student_card;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Student extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
    ];
    public function studentCard(){
        return $this->hasOne(Student_card::class, 'student_id');
    }
}
