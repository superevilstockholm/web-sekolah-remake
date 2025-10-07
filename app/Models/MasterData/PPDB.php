<?php

namespace App\Models\MasterData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;
    
    protected $table = 'ppdb';

    protected $fillable = [
        'jenis_pendaftaran',
        'jenjang',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp',
        'no_hp',
        'no_hp2',
        'email',
    ];

    public $timestamps = true;

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
