<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'doctor_image',
        'major_id'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
