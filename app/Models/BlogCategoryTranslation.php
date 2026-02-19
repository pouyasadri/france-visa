<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogCategoryTranslation extends Model
{
    protected $table = 'blog_category_translations';

    protected $fillable = [
        'blog_category_id',
        'locale',
        'name',
        'slug',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
}
