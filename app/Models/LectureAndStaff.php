<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureAndStaff extends Model
{
    use HasFactory;

    protected $table = 'lecture_and_staff';

    protected $fillable = [
        'name',
        'position',
        'image',
        'description',
    ];
}
