<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employee;
class Id_card extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'card_number',
        'issue_date',
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
