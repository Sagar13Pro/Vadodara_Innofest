<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemStatement extends Model
{
    use HasFactory;
    protected $fillable = [
        'Problem Category',
        'Problem Title',
    ];
}
