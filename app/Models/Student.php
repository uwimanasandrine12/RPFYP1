<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    // Primary key and disable auto-increment for custom primary key
    protected $primaryKey = 'student_reg_number';
    public $incrementing = false; // because it's not auto-increment

    // Fillable attributes for mass assignment
    protected $fillable = [
        'student_reg_number',
        'student_first_name',
        'student_last_name',
        'student_gender',
        'student_email',
        'student_phone_number',
        'password',
    ];

    // Attributes to be hidden from the array / JSON representation
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Define the relationship with the Project model (one-to-many)
    public function projects()
    {
        return $this->hasMany(Project::class, 'student_reg_number', 'student_reg_number');
    }

    // Override the getAuthIdentifierName method to use student_reg_number
    public function getAuthIdentifierName()
    {
        return 'student_reg_number'; // match database column
    }

    // Optionally, add a custom method for setting the password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =($value); // Automatically hash password before saving
    }
}
