<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'user_id',
        'category',
        'website',
    ];
    public function user()  {      
        return $this->belongsTo(User::class);  
    }
}
