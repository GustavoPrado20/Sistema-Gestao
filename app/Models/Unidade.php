<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidades';

    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'id_bandeira'
    ];

    public function bandeira(){
        return $this->belongsTo(Bandeira::class);
    }

    public function colaborador(){
        return $this->hasMany(Colaborador::class);
    }
}
