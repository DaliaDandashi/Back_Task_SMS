<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'phone',
        'teacher_id',
        
       
    ];
    public function Admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    
}
