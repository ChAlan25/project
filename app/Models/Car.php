<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'brand',
        'model',
        'year',
        'price',
        'description',
        'image_path',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
