<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'license_number', 'vehicle_id'];

    use HasFactory;
}
