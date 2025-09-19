<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $table = 'blog_categories';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'parent_id',
    ];

    protected static function booted(): void
    {
        static::creating(static function (self $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::ulid();
            }
        });
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function translations(): HasMany
    {
        return $this->hasMany(BlogCategoryTranslation::class, 'blog_category_id', 'id');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }
}
