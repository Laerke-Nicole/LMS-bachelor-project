<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gdpr extends Model
{
    use HasFactory;

    protected $fillable = [
        'valid_until',
        'consent_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
