<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;

    protected $table = 'municipios';
	protected $primaryKey = 'id';
	protected $fillable = [
            'cp',
            'nombre',
            'id_estado'
        ];
}
