<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoEconomico extends Model
{
    protected $table = 'grupos_economicos';

    protected $fillable = [
        'nome'
    ];

    public function bandeiras()
    {
        return $this->hasMany(Bandeira::class, 'id_grupo_economico');
    }

    public static function findById($id){
        return self::query()->where('id', '=', $id)->first();
    }
}
