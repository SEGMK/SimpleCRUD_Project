<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public $timestamps= false;
    use HasFactory;
    protected $fillable = [
        'name',
        'lastName',
        'phone',
        'street',
        'city/conutry'
    ];
}
