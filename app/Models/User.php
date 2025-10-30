<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'mail',
        'password',
        'phone',
        'role',
        'address_id',
        'company_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
    protected $casts = [
        'mail_verified_at' => 'datetime',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function trainings()
    {
        return $this->belongsToMany(Training::class);
    }

    public function emails()
    {
        return $this->belongsToMany(Email::class);
    }

    public function evaluations()
    {
        return $this->belongsToMany(Evaluation::class)
                    ->withPivot('signed_date', 'is_signed')
                    ->withTimestamps();
    }

    public function followUpTests()
    {
        return $this->belongsToMany(FollowUpTest::class)
                    ->withPivot('is_passed', 'complete_date')
                    ->withTimestamps();
    }

    public function sentEmails()
    {
        return $this->hasMany(Email::class, 'sender_id');
    }

    public function receivedEmails()
    {
        return $this->hasMany(Email::class, 'recipient_id');
    }

    public function orderedTrainings()
    {
        return $this->hasMany(Training::class, 'ordered_by_id');
    }

    public function trainingsAsTrainer()
    {
        return $this->hasMany(Training::class, 'trainer_id');
    }

    public function verifiedCertificates()
    {
        return $this->hasMany(Training::class, 'verified_by_id');
    }
}
