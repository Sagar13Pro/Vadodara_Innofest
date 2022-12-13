<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'teamID',
        'teamName',
        'teamLeaderName',
        'teamLeaderEmail',
        'teamLeaderMobile',
        'mentorName',
        'mentorEmail',
        'mentorMobile',
        'institute',
        'teamMembers',
        'problemID',
        'problemTitle',
        'problemCategory',
        'problemDescription',
        'solutionBrief',
        'methodology',
        'timeline',
        'image1Name',
        'image2Name',
    ];

    protected $attributes = [
        'image1Name' => 'Null',
        'image2Name' => 'Null',
    ];

    public function setTeamIdAttribute($value)
    {
        if (count(Proposal::all()) <= 0) {
            $this->attributes['teamID'] = $value;
        } else {
            $digit = (string)substr($value, 5) + 1;
            $value = substr_replace($value, $digit, 5);
            $this->attributes['teamID'] = $value;
        }
    }
}
