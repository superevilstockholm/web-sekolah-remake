<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class CookieAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('auth_token');
        if (!$token) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized: No token provided'
            ], 401);
        }
        $accessToken = PersonalAccessToken::findToken($token);
        if (!$accessToken || !$accessToken->tokenable) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized: Invalid token'
            ], 401)->withCookie(
                'auth_token', // cookie name
                '', // cookie value
                -1, // cookie expiration
                '/', // cookie path
                null, // cookie domain
                false, // cookie secure
                false // cookie httponly
            );
        }
        Auth::login($accessToken->tokenable);
        $request->merge(['user' => $accessToken->tokenable]);
        return $next($request);
    }
}
