<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $table = 'blog_posts';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'category_id',
        'main_image',
        'blog_main_image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(static function (self $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::ulid();
            }
        });
    }

    /**
     * Compatibility: service/controllers use blog_main_image; DB column is main_image
     */
    public function getBlogMainImageAttribute(): ?string
    {
        return $this->attributes['main_image'] ?? null;
    }

    public function setBlogMainImageAttribute($value): void
    {
        $this->attributes['main_image'] = $value;
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    public function translations(): HasMany
    {
        return $this->hasMany(BlogPostTranslation::class, 'blog_post_id', 'id');
    }
}
