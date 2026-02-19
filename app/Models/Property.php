<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Property extends Model
{
    use SoftDeletes;

    protected $table = 'properties';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'price',
        'rooms',
        'garages',
        'type',
        'status',
        'address_line',
        'postal_code',
        'city',
        'region',
        'country',
        'main_image',
        'published_at',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'rooms' => 'integer',
        'garages' => 'integer',
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(static function (self $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::ulid();
            }
        });
    }

    public function translations(): HasMany
    {
        return $this->hasMany(PropertyTranslation::class, 'property_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class, 'property_id', 'id')->orderBy('position');
    }

    public function getTranslation(string $locale, bool $fallback = true): ?PropertyTranslation
    {
        $translation = $this->translations()->where('locale', $locale)->first();

        if (! $translation && $fallback) {
            $translation = $this->translations()->where('locale', config('app.fallback_locale', 'en'))->first();
        }

        return $translation;
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }
}
