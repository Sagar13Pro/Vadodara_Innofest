<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'firstName',
        'lastName',
        'mobileNo',
        'state',
        'city',
        'Avatar',
        'email_verified'
    ];
    protected $attributes = ['remember_token' => NULL];

    //accessor=> when accessing from db it will called
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    //For getting full name of user
    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    //mutator=>sending data to db it will called
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
