<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    protected $fillable = [
        'user_id', 'acao', 'entidade_type', 'entidade_id', 'changes'
    ];

    protected $casts = [
        'changes' => 'array', // Converte JSON em array
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
