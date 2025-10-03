<?php

namespace App\Http\Controllers\MasterData;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

// Models
use App\Models\MasterData\PPDB;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $ppdb = PPDB::select(['id', 'jenis_pendaftaran', 'nama_lengkap', 'jenis_kelamin', 'jenjang']);
            // Search
            $allowed = [
                'jenis_pendaftaran',
                'jenjang',
                'nama_lengkap',
                'jenis_kelamin',
                'tempat_lahir',
                'no_telp',
                'no_hp',
                'no_hp2',
                'email'
            ];
            $type = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'jenis_kelamin') {
                    $allowed_jenis_kelamin = ['L', 'P'];
                    if (in_array($query, $allowed_jenis_kelamin)) {
                        $ppdb->where($type, $query);
                    }
                } else {
                    $ppdb->where($type, 'like', "%$query%");
                }
            }
            // Limit
            $limit = $request->query('limit', 10);
            if (strtolower($limit) === 'all') {
                $ppdb = $ppdb->get();
            } else {
                $ppdb = $ppdb->paginate((int) $limit);
            }
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched ppdb',
                'data' => $ppdb
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
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'jenis_pendaftaran' => 'required|string|in:Peserta Didik Baru,Mutasi',
                'jenjang' => 'required|string|in:TK,SD,SMP,SMK',
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|in:L,P',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'no_telp' => 'nullable|string|max:255',
                'no_hp' => 'nullable|string|max:255',
                'no_hp2' => 'nullable|string|max:255',
                'email' => 'required|email|unique:ppdb',
            ]);
            PPDB::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully created ppdb',
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
    public function show(PPDB $ppdb): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched ppdb details',
                'data' => $ppdb
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
    public function update(Request $request, PPDB $ppdb)
    {
        try {
            $validated = $request->validate([
                'jenis_pendaftaran' => 'sometimes|string|in:Peserta Didik Baru,Mutasi',
                'jenjang' => 'sometimes|string|in:TK,SD,SMP,SMK',
                'nama_lengkap' => 'sometimes|string|max:255',
                'jenis_kelamin' => 'sometimes|string|in:L,P',
                'tempat_lahir' => 'sometimes|string|max:255',
                'tanggal_lahir' => 'sometimes|date',
                'no_telp' => 'sometimes|string|max:255',
                'no_hp' => 'sometimes|string|max:255',
                'no_hp2' => 'sometimes|string|max:255',
                'email' => 'sometimes|email|unique:ppdb,email,' . $ppdb->id,
            ]);
            $ppdb->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated ppdb',
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
    public function destroy(PPDB $ppdb): JsonResponse
    {
        try {
            $ppdb->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted ppdb',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
