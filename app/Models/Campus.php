<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'campus_id',
        'campus_name',
        'faculty_code',
    ];

    // Relationships
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
?>