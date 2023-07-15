<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialBack extends Model
{
    use HasFactory;

    public function rSocial()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
