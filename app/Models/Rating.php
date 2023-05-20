<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';

    protected $fillable = [
        'rate', 'user_id', 'post_activity_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postActivity()
    {
        return $this->belongsTo(PostActivity::class);
    }
}
