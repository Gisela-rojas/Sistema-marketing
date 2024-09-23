<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaniaMarketing extends Model
{
    protected $table = 'campanias';
    protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'presupuesto', 'canal'];
}
