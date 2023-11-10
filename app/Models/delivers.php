<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivers extends Model
{
    use HasFactory;

    protected $fillable = [
        "wood_Name",
        "wood_quality",
        "wood_price",
        "location"
    ];
}
