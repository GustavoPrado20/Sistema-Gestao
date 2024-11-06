<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bandeira extends Model
{
    protected $table = 'bandeiras';

    protected $fillable = [
        'nome',
        'id_grupo_economico'
    ];

    public function grupoEconomico(){
        return $this->belongsTo(grupoEconomico::class);
    }

    public function unidades(){
        return $this->hasMany(Unidade::class);
    }
}
