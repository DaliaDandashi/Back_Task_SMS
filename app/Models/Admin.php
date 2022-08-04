<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'username',
        'password',
        'type',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }
    
}
