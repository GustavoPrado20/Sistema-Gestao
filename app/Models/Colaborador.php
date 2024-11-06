<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaboradores';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'id_unidade'
    ];

    public function unidade(){
        return $this->belongsTo(Unidade::class);
    }
}
