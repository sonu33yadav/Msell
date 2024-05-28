<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courese extends Model
{
    use HasFactory;

    protected $table    = 'coureses';
    protected $fillable = [
        'name',
        'dob',
        'course',
        'course_duration',
        'course_type',
        'year_of_completion',
    ];
}
