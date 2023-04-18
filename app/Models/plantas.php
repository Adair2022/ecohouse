<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plantas extends Model
{
    use HasFactory;
    protected $table='plantas';
    protected $fillable=[
        'id',
        'nombre',
        'img',
        'detalle',
        'estatus',
        'color',
    ];
}
