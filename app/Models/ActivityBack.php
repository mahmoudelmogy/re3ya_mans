<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityBack extends Model
{
    use HasFactory;

    public function rActivity()
    {
        return $this->belongsTo(Activity::class,'activity_id');
    }
}
