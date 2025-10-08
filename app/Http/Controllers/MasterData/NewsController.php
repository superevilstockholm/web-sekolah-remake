<?php

namespace App\Http\Controllers\MasterData;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\MasterData\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $news = News::with(['user:id,name'])->select(['id', 'slug', 'title', 'image', 'user_id', 'category']);
            // Search
            $allowed = ['title', 'slug', 'content', 'author', 'category'];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'author') {
                    $news->whereHas('user', fn($q) =>
                        $q->where('name', 'like', "%$query%")
                    );
                } elseif ($type === 'category') {
                    if (in_array($query, ['berita', 'acara', 'berita_acara'])) {
                        $news->where('category', $query);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Invalid category'
                        ], 400);
                    }
                } else {
                    $news->where($type, 'like', "%$query%");
                }
            }
            // Limit
            $limit = $request->query('limit', 10);
            $news->orderBy('created_at', 'desc');
            $news = $limit === 'all'
                ? $news->get()->makeHidden('user_id')
                : $news->paginate((int) $limit)->through(fn($item) => $item->makeHidden('user_id'));
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched news',
                'data' => $news
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
                'category' => 'required|string|in:berita,acara,berita_acara',
            ]);
            $validated['user_id'] = $request->user()->id;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('news', $filename, 'public');
                $validated['image'] = 'news/' . $filename;
            }
            News::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully created news'
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
    public function show(Request $request, $identifier): JsonResponse
    {
        try {
            $news = is_numeric($identifier)
                ? News::findOrFail($identifier) // ID
                : News::where('slug', $identifier)->firstOrFail(); // Slug
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched news details',
                'data' => $request->user()
                    ? $news->load('user')
                    : $news->load('user:id,name')
            ], 200);
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
    public function update(Request $request, News $news): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'sometimes|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'sometimes|string',
                'category' => 'sometimes|string|in:berita,acara,berita_acara',
            ]);
            if ($request->has('image') && $request->input('image') === null) {
                if ($news->image && Storage::disk('public')->exists($news->image)) {
                    Storage::disk('public')->delete($news->image);
                }
            }
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if ($news->image) {
                    Storage::disk('public')->delete($news->image);
                }
                $file = $request->file('image');
                $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('news', $filename, 'public');
                $validated['image'] = 'news/' . $filename;
            }
            $news->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated news'
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
    public function destroy(News $news): JsonResponse
    {
        try {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $news->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted news'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
