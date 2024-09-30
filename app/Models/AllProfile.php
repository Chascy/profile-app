<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'birthdate',
        'home_address',
        'contact_number',
    ];
}
