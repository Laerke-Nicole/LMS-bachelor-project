<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'send_date',
        'type',
        'subject',
        'content',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
