<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $table = 'contact';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'dob',
        'birth_place',
        'email',
        'phone',
        'city',
        'district',
        'postal_code',
        'address',
        'position',
        'foreign_languages',
        'experiences',
    ];
}
