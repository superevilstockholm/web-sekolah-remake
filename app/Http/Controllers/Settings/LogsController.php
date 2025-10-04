<?php

namespace App\Http\Controllers\Settings;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

// Models
use App\Models\Settings\Logs;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $logs = Logs::with(['user:id,name'])->select(['id', 'user_id', 'method', 'path']);
            // Search
            $allowed = ['name', 'user_id', 'method', 'path'];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'name') {
                    $logs->whereHas('user', fn($q) =>
                        $q->where('name', 'like', "%$query%")
                    );
                } else {
                    $logs->where($type, 'like', "%$query%");
                }
            }
            // Limit
            $limit = $request->query('limit', 10);
            $logs = $limit === 'all'
                ? $logs->get()->makeHidden(['user_id'])
                : $logs->paginate((int) $limit)->through(fn($item) => $item->makeHidden('user_id'));
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched logs',
                'data' => $logs
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Logs $log): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched log details',
                'data' => $log->load('user:id,name')
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
