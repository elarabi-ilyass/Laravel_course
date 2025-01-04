<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date=['created_at'];
    // Make sure to use lowercase for consistency with other fields like 'description'
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',  // updated to lowercase
        'image',
    ];

    // Protect sensitive fields from being exposed in arrays or JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getRouteKeyName(){
        return 'id';
    }
}
