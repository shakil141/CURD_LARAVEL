<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'student_name',
        'student_email',
        'student_phone',
        'department',

    ];

    public function studentToDepartment()
    {
        return $this->hasOne(Department::class,'id');
    }
}
