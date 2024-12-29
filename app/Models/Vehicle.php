<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable = ['vehicle_type', 'vehicle_number', 'model','capacity','owner_name','owner_number'];

    use HasFactory;
}





