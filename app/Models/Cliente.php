<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function campanias()
    {
        return $this->hasMany(CampaniaMarketing::class, 'id_cliente');
    }
}

class CampaniaMarketing extends Model
{
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}

