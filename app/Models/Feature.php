<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'route_name',
        'description',
        'required_credits',
        'is_active',
    ];

}