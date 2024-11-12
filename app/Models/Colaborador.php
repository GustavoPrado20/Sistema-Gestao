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
        return $this->belongsTo(Unidade::class, 'id_unidade');
    }

    public static function findById($id){
        return self::query()->where('id', '=', $id)->first();
    }
}
