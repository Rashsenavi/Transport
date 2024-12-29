<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'passengers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];

    use HasFactory;
}
