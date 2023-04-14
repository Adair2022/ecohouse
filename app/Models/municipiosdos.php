<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipiosdos extends Model
{
    use HasFactory;
    protected $table='municipiosdos';
    protected $fillable=[
        'id_estado',
        'created_at',
      ];
}
