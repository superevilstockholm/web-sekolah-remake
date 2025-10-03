<?php

namespace App\Http\Controllers\MasterData;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\MasterData\Events;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $events = Events::with(['user:id,name'])->select(['id', 'title', 'image', 'user_id', 'category']);
            // Search
            $allowed = ['title', 'slug', 'content', 'author', 'category'];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'author') {
                    $events->whereHas('user', fn($q) =>
                        $q->where('name', 'like', "%$query%")
                    );
                } elseif ($type === 'category') {
                    if (in_array($query, ['acara', 'acara_berita'])) {
                        $events->where('category', $query);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Invalid category'
                        ], 400);
                    }
                } else {
                    $events->where($type, 'like', "%$query%");
                }
            }
            // Limit
            $limit = $request->query('limit', 10);
            $events->orderBy('created_at', 'desc');
            $events = $limit === 'all'
                ? $events->get()->makeHidden('user_id')
                : $events->paginate((int)$limit)->through(fn($item) => $item->makeHidden('user_id'));
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched events',
                'data' => $events
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required|string',
                'category' => 'required|string|in:acara,acara_berita',
            ]);
            $validated['user_id'] = $request->user()->id;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('events', $filename, 'public');
                $validated['image'] = 'events/' . $filename;
            }
            Events::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully created event'
            ], 201);
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
    public function show(Events $event): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched event details',
                'data' => $event->load('user')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $event): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'sometimes|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'sometimes|string',
                'category' => 'sometimes|string|in:acara,acara_berita',
            ]);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if ($event->image) {
                    Storage::disk('public')->delete($event->image);
                }
                $file = $request->file('image');
                $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('events', $filename, 'public');
                $validated['image'] = 'events/' . $filename;
            }
            $event->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated event'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $event): JsonResponse
    {
        try {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $event->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted event'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
