<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequestMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Format log
        $logData = [
            'time' => now()->toDateTimeString(),
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'payload' => $request->except(['password', 'password_confirmation']), // Hindari menyimpan password
        ];

        // Simpan log ke file laravel.log
        Log::channel('daily')->info('Request Log:', $logData);

        return $next($request);
    }
}
