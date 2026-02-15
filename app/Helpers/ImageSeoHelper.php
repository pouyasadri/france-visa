<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class ImageSeoHelper
{
    /**
     * Generate descriptive alt text from filename and context
     */
    public static function generateAlt(string $filename, ?string $context = null): string
    {
        // Remove file extension
        $name = pathinfo($filename, PATHINFO_FILENAME);

        // Replace common separators with spaces
        $name = str_replace(['-', '_', '.'], ' ', $name);

        // Remove numbers if they're at the end (like image-1, photo_2)
        $name = preg_replace('/\s+\d+$/', '', $name);

        // Capitalize words
        $name = Str::title($name);

        // Add context if provided
        if ($context) {
            $name .= ' - '.$context;
        }

        return trim($name);
    }

    /**
     * Build image schema
     */
    public static function buildSchema(string $url, string $alt, ?int $width = null, ?int $height = null): array
    {
        $schema = [
            '@type' => 'ImageObject',
            'url' => self::makeAbsoluteUrl($url),
            'description' => $alt,
        ];

        if ($width) {
            $schema['width'] = $width;
        }

        if ($height) {
            $schema['height'] = $height;
        }

        return $schema;
    }

    /**
     * Get lazy loading attributes
     */
    public static function getLazyAttributes(bool $isAboveFold = false): array
    {
        if ($isAboveFold) {
            return [
                'loading' => 'eager',
                'fetchpriority' => 'high',
            ];
        }

        return [
            'loading' => 'lazy',
            'decoding' => 'async',
        ];
    }

    /**
     * Make URL absolute
     */
    protected static function makeAbsoluteUrl(string $url): string
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return $url;
        }

        return url($url);
    }

    /**
     * Generate responsive image srcset
     */
    public static function generateSrcSet(string $imagePath, array $sizes = [320, 640, 960, 1280]): string
    {
        $srcset = [];
        $baseUrl = asset($imagePath);

        foreach ($sizes as $width) {
            // If you have image resizing functionality, use it here
            // For now, we'll just use the same image
            $srcset[] = "{$baseUrl} {$width}w";
        }

        return implode(', ', $srcset);
    }
}
