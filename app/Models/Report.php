<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
        'user_id',
        'post_id'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function post() :BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
