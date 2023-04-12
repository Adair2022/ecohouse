<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table='ubicacion';
    protected $fillable=[
        'ciudad',
        'calle',
        'n_ex',
        'n_int',
        'colonia',
        'usuario_id',
    ];
}
