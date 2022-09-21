<?php

namespace App\Models;

//
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */    
    protected $fillable = [
        'uid',
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'address',
        'birthdate',
        'archive'
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $cast = [
        'email_verified_at' => 'datetime',
    ];
}
