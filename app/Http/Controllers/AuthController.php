<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

// Services
use App\Services\AuthService;

// Models
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    public function login(Request $request, AuthService $authService): JsonResponse
    {
        try {
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $user = User::where('email', $validated['email'])->first();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email or password is incorrect'
                ], 401);
            }
            if (!$authService->checkPassword($validated['password'], $user->password)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email or password is incorrect'
                ], 401);
            }
            $user->tokens()->delete();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'status' => true,
                'message' => 'Login successfully',
                'user' => $user->name
            ], 200)->withCookie(
                'auth_token', // cookie name
                $token, // cookie value
                3600, // cookie expiration
                '/', // cookie path
                null, // cookie domain
                false, // cookie secure
                false // cookie httponly
            );
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
