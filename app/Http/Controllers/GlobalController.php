<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GlobalController extends Controller
{
    public function uploadImage(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'directory' => 'required|string',
                'upload' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
            ]);
            $file = $request->file('upload');
            $directory = $request->directory;
            // ✅ Generate unique filename: random string + timestamp + extension
            $random = Str::random(10);
            $ext = $file->getClientOriginalExtension();
            $filename = "{$random}_" . time() . ".{$ext}";
            // ✅ Store to public disk
            $path = $file->storeAs("{$directory}", $filename, 'public');
            $url = Storage::url($path);

            return response()->json([
                'status' => true,
                'message' => 'Upload success',
                'path' => $path,
                'url' => asset($url),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
