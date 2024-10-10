<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutritionist extends Model
{
    protected $fillable = ['name', 'email', 'password', 'function'];
}