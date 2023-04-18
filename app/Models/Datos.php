<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Datos extends Model
{
    use HasFactory;
    protected $table='datos';
    protected $fillable=[
        'humedad',
        'created_at',
        'id_planta',
      ];
}
