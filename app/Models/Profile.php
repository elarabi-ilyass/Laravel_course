<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Make sure to use lowercase for consistency with other fields like 'description'
    protected $fillable = [
        'name',
        'email',
        'password',
        'Description',  // updated to lowercase
    ];

    // Protect sensitive fields from being exposed in arrays or JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
