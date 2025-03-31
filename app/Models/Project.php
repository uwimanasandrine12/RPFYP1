<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $primaryKey = 'project_code';
    public $incrementing = false; // If project_code is not an auto-increment column
    protected $keyType = 'string';

    protected $fillable = [
        'project_code', 
        'project_name', 
        'project_problems',
         'project_solutions',
        'project_abstract',
        
        'project_dissertation', 
        'project_source_codes',
        'department_code',
         'student_reg_number'
    ];

    // If you have a Student model and a student has many projects
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_reg_number', 'student_reg_number');
    }

    public function department()
{
    
    return $this->belongsTo(Department::class, 'department_code', 'department_code');

}


    

}
