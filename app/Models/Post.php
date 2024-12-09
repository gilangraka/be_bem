<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'content'
    ];

    public function post_category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
