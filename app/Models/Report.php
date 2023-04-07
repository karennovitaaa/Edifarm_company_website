<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
        'user_id',
        'post_id'
    ];

    public function users() :BelongsTo
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    
    public function posts() :BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
