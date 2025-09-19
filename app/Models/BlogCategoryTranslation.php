<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class BlogCategoryTranslation extends Model
{
    protected $table = 'blog_category_translations';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'blog_category_id',
        'locale',
        'name',
        'slug',
    ];

    protected static function booted(): void
    {
        static::creating(static function (self $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::ulid();
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
}

