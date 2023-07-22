<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'blood_pressure_systolic',
        'blood_pressure_diastolic',
        'blood_pressure_rating',
        'blood_saturation',
        'blood_saturation_rating',
        'temperature',
        'temperature_rating',
        'pulse_rate',
        'pulse_rate_rating'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
