<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'tile',
        'category_id',
        'body',
    ];
    public function category_R()
    {
        return $this->belongsTo(Post::class);
    }
}
