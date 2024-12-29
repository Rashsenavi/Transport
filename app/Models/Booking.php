<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'passenger_id',
        'driver_id',
        'vehicle_id',
        'pickup_location',
        'dropoff_location',
        'fare',
        'pickup_time',
        'dropoff_time'
    ];

    use HasFactory;
}

