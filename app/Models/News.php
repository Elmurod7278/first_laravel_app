<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'news_id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
