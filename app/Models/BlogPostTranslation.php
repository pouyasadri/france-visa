<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class BlogPostTranslation extends Model
{
    protected $table = 'blog_post_translations';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'blog_post_id',
        'locale',
        'title',
        'slug',
        'excerpt',
        'body',
    ];

    protected static function booted(): void
    {
        static::creating(static function (self $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::ulid();
            }
        });
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Blog::class, 'blog_post_id', 'id');
    }
}

