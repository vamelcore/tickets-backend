<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'version',
        'status',
        'deprecated_date'
    ];

    protected $dates = [
        'deprecated_date'
    ];
}
