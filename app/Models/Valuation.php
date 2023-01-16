<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'description',
        'title',
        'style',
        'time_spend',
        'user_id',
        'area_size'
    ];

    




}
