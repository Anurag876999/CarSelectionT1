<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarInquiry extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'car_types',
    ];

    protected $casts = [
        'car_types' => 'array',
    ];
}
