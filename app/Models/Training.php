<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'status',
        'training_time',
        'training_date',
        'participation_link',
        'reminder_sent_18_m',
        'reminder_sent_22_m',
        'reminder_before_training',
        'extra_comments',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
