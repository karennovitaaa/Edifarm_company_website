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
        'level',
        'bio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }

    // public function activities()
    // {
    //     return $this->hasMany(Activity::class);
    // }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    public function postComments()
    {
        return $this->belongsToMany(Post::class, 'comments')->withTimestamps();
    }

    // public function postLikes()
    // {
    //     return $this->belongsToMany(Post::class, 'likes');
    // }

    // public function reports()
    // {
    //     return $this->hasMany(Report::class);
    // }

    // public function postReports()
    // {
    //     return $this->belongsToMany(Post::class, 'reports');
    // }
}
