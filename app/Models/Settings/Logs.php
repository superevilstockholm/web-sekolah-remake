<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\User;

class Logs extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'user_id',
        'method',
        'path',
        'ip',
        'user_agent',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
