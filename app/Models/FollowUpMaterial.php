<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'url',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
