<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Book extends Pivot
{
    //

   
    protected $fillable = [
        'message',
    ];
}
