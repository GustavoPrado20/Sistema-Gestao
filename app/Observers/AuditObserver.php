<?php

namespace App\Observers;
use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;

class AuditObserver
{
    public function created($model)
    {
        $this->logAudit($model, 'created');
    }

    public function updated($model)
    {
        $changes = $model->getChanges(); // Obtém apenas os campos que foram modificados
        $this->logAudit($model, 'updated', $changes);
    }

    public function deleted($model)
    {
        $this->logAudit($model, 'deleted');
    }

    protected function logAudit($model, $action, $changes = null)
    {
        AuditLog::create([
            'user_id' => Auth::id(),
            'acao' => $action,
            'entidade_type' => get_class($model),
            'entidade_id' => $model->id,
            'changes' => $changes
        ]);
    }
}
