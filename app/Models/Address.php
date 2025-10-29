<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street_name',
        'street_number',
    ];

    public function postalCode()
    {
        return $this->belongsTo(PostalCode::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function abInventech()
    {
        return $this->hasMany(AbInventech::class);
    }
}
