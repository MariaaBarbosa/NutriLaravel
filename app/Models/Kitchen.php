<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    protected $fillable = ['data', 'cafe_da_manha_feito', 'cafe_da_manha_desperdicio', 'almoco_feito', 'almoco_desperdicio', 'cafe_da_tarde_feito', 'cafe_da_tarde_desperdicio'];
}
