<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'blog_title',
        'blog_category',
        'blog_slug',
        'blog_body',
        'blog_main_image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $indexes = [
        'blog_slug',
        'blog_category',
    ];
}

