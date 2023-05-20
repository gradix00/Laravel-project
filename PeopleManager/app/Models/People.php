<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'FirstName',
        'LastName',
        'Age',
        'PhoneNumber',
        'Street',
        'City',
        'Country',
    ];

    public $timestamps = true;
}
