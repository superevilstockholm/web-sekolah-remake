<?php

namespace App\Models\MasterData;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\User;

class Events extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'user_id',
        'category',
    ];

    public $timestamps = true;

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/' . $this->image)
            : asset('static/img/no-image-placeholder.svg');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Otomatis generatte slug
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            $event->slug = static::generateUniqueSlug($event->title);
        });
        static::updating(function ($event) {
            if ($event->isDirty('title')) {
                $event->slug = static::generateUniqueSlug($event->title, $event->id);
            }
        });
    }

    // Pembuat slug unik
    public static function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;
        while (static::where('slug', $slug)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }
        return $slug;
    }
}
