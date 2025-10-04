<?php

namespace App\Http\Middleware;

use Closure;
use Throwable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

// Models
use App\Models\Settings\Logs;

class LoggerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        try {
            Logs::create([
                'user_id' => $request->user() ? $request->user()->id : null,
                'method' => $request->method(),
                'path' => $request->path(),
                'ip' => $request->ip(),
                'user_agent' => $request->header('User-Agent')
            ]);
        } catch (Throwable $e) {
            Log::warning('Request logging failed: ' . $e->getMessage());
        }
        return $response;
    }
}
