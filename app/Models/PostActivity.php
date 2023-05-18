<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostActivity extends Model
{
    use HasFactory;
    protected $table = 'post_activity';

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
