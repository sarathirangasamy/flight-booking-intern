<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'service_id',
        'name', 
        'mobile_number', 
        'passport_number', 
        'dob', 
        'leaving_from', 
        'going_to', 
        'trip_type', 
        'departure_date', 
        'return_date', 
        'amount', 
        'status',
        'pickup_location',
        'drop_location',
        'rental_date',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
