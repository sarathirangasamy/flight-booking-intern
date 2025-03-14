<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /** @use HasFactory<\Database\Factories\RatingFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'booking_id',
        'description',
        'rating',
    ];


      // Relationship with Booking
      public function booking()
      {
          return $this->belongsTo(Booking::class);
      }
  
      // Relationship with Service
      public function service()
      {
          return $this->belongsTo(Service::class);
      }
  
      // Relationship with User
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
