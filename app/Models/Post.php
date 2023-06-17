<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillabel = [
        "user_id",
        "title",
        "content",
        "published"
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
