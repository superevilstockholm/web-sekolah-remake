<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use HasFactory;
    
    protected $table = 'publications';

    protected $fillable = [
        'title',
        'cover',
        'file_path',
    ];

    public $timestamps = true;

    protected $appends = ['cover_url', 'file_path_url'];

    public function getCoverUrlAttribute(): ?string
    {
        return $this->cover ? asset('storage/' . $this->cover)
            : asset('static/img/no-image-placeholder.svg');
    }

    public function getFilePathUrlAttribute(): ?string
    {
        return $this->file_path ? asset('storage/' . $this->file_path)
            : null;
    }
}
