<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'supervisor_email',
        'supervisor_first_name',
        'supervisor_last_name',
        'supervisor_phone_number',
        'project_id',
    ];

    // Relationships
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
?>