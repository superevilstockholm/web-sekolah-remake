<?php

namespace App\Http\Controllers\MasterData;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\MasterData\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $blogs = Blogs::with(['user:id,name'])->select(['id', 'slug', 'title', 'image', 'user_id', 'category']);
            // Search
            $allowed = ['title', 'slug', 'content', 'author', 'category'];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'author') {
                    $blogs->whereHas('user', fn($q) =>
                        $q->where('name', 'like', "%$query%")
                    );
                } elseif ($type === 'category') {
                    if (in_array($query, ['blog', 'artikel'])) {
                        $blogs->where('category', $query);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Invalid category'
                        ], 400);
                    }
                } else {
                    $blogs->where($type, 'like', "%$query%");
                }
            }
            // Limit
            $limit = $request->query('limit', 10);
            $blogs->orderBy('created_at', 'desc');
            $blogs = $limit === 'all'
                ? $blogs->get()->makeHidden('user_id')
                : $blogs->paginate((int)$limit)->through(fn($item) => $item->makeHidden('user_id'));
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched blogs',
                'data' => $blogs
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
                'category' => 'required|string|in:blog,artikel',
            ]);
            $validated['user_id'] = $request->user()->id;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('blogs', $filename, 'public');
                $validated['image'] = 'blogs/' . $filename;
            }
            Blogs::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully created blog'
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
            $blog = is_numeric($identifier)
                ? Blogs::findOrFail($identifier) // ID
                : Blogs::where('slug', $identifier)->firstOrFail(); // Slug
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched blog details',
                'data' => $request->user()
                    ? $blog->load('user')
                    : $blog->load('user:id,name')
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
    public function update(Request $request, Blogs $blog): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'sometimes|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'sometimes|string',
                'category' => 'sometimes|string|in:blog,artikel',
            ]);
            if ($request->has('image') && $request->input('image') === null) {
                if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                    Storage::disk('public')->delete($blog->image);
                }
            }
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if ($blog->image) {
                    Storage::disk('public')->delete($blog->image);
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('blogs', $filename, 'public');
                $validated['image'] = 'blogs/' . $filename;
            }
            $blog->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated blog'
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
    public function destroy(Blogs $blog): JsonResponse
    {
        try {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted blog'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
