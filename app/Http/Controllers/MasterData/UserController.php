<?php

namespace App\Http\Controllers\MasterData;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

// Services
use App\Services\AuthService;

// Models
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $users = User::query();
            // Search
            $allowed = ['id', 'name', 'email'];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                $users->where($type, 'like', "%$query%");
            }
            // Limit
            $limit = $request->query('limit', 10);
            if (strtolower($limit) === 'all') {
                $users = $users->get();
            } else {
                $users = $users->paginate((int) $limit);
            }
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched users',
                'data' => $users->only(['id', 'name', 'email'])
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, AuthService $authService): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:8|max:128',
            ]);
            $validated['password'] = $authService->hashPassword($validated['password']);
            User::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully created user',
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched user details',
                'data' => $user
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, AuthService $authService): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'sometimes|string|max:255',
                'email' => 'sometimes|email|unique:users,email,' . $user->id,
                'password' => 'sometimes|string|min:8|max:128',
            ]);
            if (isset($validated['password'])) {
                $validated['password'] = $authService->hashPassword($validated['password']);
            }
            $user->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated user',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        try {
            $user->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted user',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
