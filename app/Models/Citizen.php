<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_number', 'igama_number', 'password', 'date', 'active'
    ];

    protected $hidden = [
        'password',
    ];

    // Optional: Add any relationships or methods you might need
}
