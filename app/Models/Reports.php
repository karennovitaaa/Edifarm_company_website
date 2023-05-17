<?php

namespace App\Models;
use App\Models\Activity;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Session;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'session_id',
        'pdf_file',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
