<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function news()
    {
     return  $this->hasOne(News::class,'id','news_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
