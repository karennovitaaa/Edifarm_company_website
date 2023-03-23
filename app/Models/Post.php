<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function userComments()
    {
        return $this->belongsToMany(User::class, 'comments');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);   
    }

    public function userLikes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }
    
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function userReports() 
    {
        return $this->belongsToMany(User::class, 'reports');
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
