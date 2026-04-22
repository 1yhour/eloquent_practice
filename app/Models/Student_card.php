<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Student_card extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'student_id',
        'card_number',
        'issue_date',
    ];
    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
