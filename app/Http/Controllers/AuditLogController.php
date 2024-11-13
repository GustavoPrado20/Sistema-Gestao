<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuditLogController extends Controller
{
    public function index(){
        $active_menu =  "LG";
        $loginAuth = Auth::check();

        $logs = AuditLog::with('user')->latest()->paginate(20);

        return view('logs', [
            'active_menu' => $active_menu,
            'loginAuth' => $loginAuth,
            'logs' => $logs
        ]);
    }
}
