<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    //

   
    protected $fillable = [
        'name','nin','address','email','phone','car_model','car_make','car_color','car_price','car_mileage','car_quantity','car_fuel','message'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
