<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    protected $fillable = [
        'user_id', 'car_model', 'car_make', 'year', 'images', 
        'car_color', 'car_price', 'car_mileage', 'car_fuel'
    ];
    protected $casts = ['images' => 'array'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}