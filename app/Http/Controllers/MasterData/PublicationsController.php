<?php

namespace App\Http\Controllers\MasterData;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Models\MasterData\Publications;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $publications = Publications::select(['id', 'title', 'cover', 'file_path'])->orderBy('created_at', 'desc');;
            // Search
            $allowed = ['title'];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                $publications = $publications->where($type, 'like', '%' . $query . '%');
            }
            // Limit
            $limit = $request->query('limit', 10);
            $publications = $limit === 'all'
                ? $publications->get()
                : $publications->paginate((int) $limit);
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched publications',
                'data' => $publications
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
                'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'file' => 'required|file|mimes:pdf,doc,docx|max:102400',
            ]);
            if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
                $file = $request->file('cover');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('publications/covers', $filename, 'public');
                $validated['cover'] = 'publications/covers/' . $filename;
            }
            if ($request->hasFile('file') && $request->file('file')->isValid()) {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('publications/files', $filename, 'public');
                $validated['file_path'] = 'publications/files/' . $filename;
            }
            Publications::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully created publication'
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
    public function show(Publications $publication): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched publication details',
                'data' => $publication
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
    public function update(Request $request, Publications $publication): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'sometimes|string|max:255',
                'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'file' => 'nullable|file|mimes:pdf,doc,docx|max:102400',
            ]);
            if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
                if ($publication->cover && Storage::disk('public')->exists($publication->cover)) {
                    Storage::disk('public')->delete($publication->cover);
                }
                $file = $request->file('cover');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('publications/covers', $filename, 'public');
                $validated['cover'] = 'publications/covers/' . $filename;
            }
            if ($request->hasFile('file') && $request->file('file')->isValid()) {
                if ($publication->file_path && Storage::disk('public')->exists($publication->file_path)) {
                    Storage::disk('public')->delete($publication->file_path);
                }
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $extension;
                $file->storeAs('publications/files', $filename, 'public');
                $validated['file_path'] = 'publications/files/' . $filename;
            }
            $publication->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated publication'
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
    public function destroy(Publications $publication): JsonResponse
    {
        try {
            if ($publication->cover && Storage::disk('public')->exists($publication->cover)) {
                Storage::disk('public')->delete($publication->cover);
            }
            if ($publication->file_path && Storage::disk('public')->exists($publication->file_path)) {
                Storage::disk('public')->delete($publication->file_path);
            }
            $publication->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted publication'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
