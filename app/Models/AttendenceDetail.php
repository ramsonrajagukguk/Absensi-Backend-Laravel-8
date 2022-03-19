<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendenceDetail extends Model
{
    protected $guarded = [];

    public function attendances()
    {
        return $this->belongsTo(Attendence::class);
    }
}