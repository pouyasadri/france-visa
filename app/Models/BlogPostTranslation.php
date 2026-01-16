<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class BlogPostTranslation extends Model
{
    protected $table = 'blog_post_translations';

    protected $fillable = [
        'blog_post_id',
        'locale',
        'title',
        'slug',
        'excerpt',
        'body',
    ];


    public function post(): BelongsTo
    {
        return $this->belongsTo(Blog::class, 'blog_post_id', 'id');
    }
}

