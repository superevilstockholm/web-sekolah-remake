<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;

// Models
use App\Models\MasterData\PPDB;
use App\Models\MasterData\News;
use App\Models\MasterData\Events;
use App\Models\MasterData\Blogs;

class DashboardController extends Controller
{
    public function getDashboardStatistics(): JsonResponse
    {
        try {
            $ppdbCount = PPDB::count();
            $newsCount = News::count();
            $eventsCount = Events::count();
            $blogsCount = Blogs::count();
            return response()->json([
                'status' => true,
                'message' => 'Dashboard statistics fetched successfully.',
                'data' => [
                    'ppdb' => $ppdbCount,
                    'news' => $newsCount,
                    'events' => $eventsCount,
                    'blogs' => $blogsCount,
                ]
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
