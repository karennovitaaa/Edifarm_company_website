<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'photo',
        'address',
        'phone',
        'born_date',
        'latitude',
        'longitude',
        'email',
        'password',
        'level'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function posts()
    {
        $this->hasMany(Post::class);
    }

    public function activities()
    {
        $this->hasMany(Activity::class);
    }

    public function comments()
    {
        $this->hasMany(Comment::class);
    }

    public function postComments()
    {
        $this->belongsToMany(Post::class, 'comments');
    }

    public function likes()
    {
        $this->hasMany(Like::class);
    }

    public function postLikes()
    {
        $this->belongsToMany(Post::class, 'likes');
    }

    public function reports()
    {
        $this->hasMany(Report::class);
    }

    public function postReports()
    {
        $this->belongsToMany(Post::class, 'reports');
    }
}
