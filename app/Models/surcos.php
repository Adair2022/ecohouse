<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surcos extends Model
{
    use HasFactory;
    protected $table='surcos';
    protected $fillable=[
        'id',
        'numero_surco',
        'humedad_min',
        'humedad_max',
        'temperatura_min',
        'temperatura_max',
          ];
}
