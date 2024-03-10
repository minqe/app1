<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class createroom extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'student_ID',
        'name_lastname',
        'email',
    ];
}
