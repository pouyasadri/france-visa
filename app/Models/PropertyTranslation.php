<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class PropertyTranslation extends Model
{
    protected $table = 'property_translations';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'property_id',
        'locale',
        'name',
        'slug',
        'description',
    ];

    protected static function booted(): void
    {
        static::creating(static function (self $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::ulid();
            }
        });
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
