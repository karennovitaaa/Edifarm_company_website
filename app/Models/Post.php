<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'caption',
        'post_latitude',
        'post_longitude',
        'user_id',
    ];

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }

    public function like()
    {
        return $this->belongsToMany(User::class, 'likes')->wherePivot('user_id', auth()->id())->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->belongsToMany(User::class, 'comments')->withTimestamps()->withPivot(['comment', 'created_at', 'updated_at']);
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // public function userComments()
    // {
    //     return $this->belongsToMany(User::class, 'comments');
    // }

    // public function likes()
    // {
    //     return $this->hasMany(Like::class);
    // }

    // public function userLikes()
    // {
    //     return $this->belongsToMany(User::class, 'likes');
    // }

    // public function reports()
    // {
    //     return $this->hasMany(Report::class);
    // }

    // public function userReports()
    // {
    //     return $this->belongsToMany(User::class, 'reports');
    // }

    // public function user() :BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

}
