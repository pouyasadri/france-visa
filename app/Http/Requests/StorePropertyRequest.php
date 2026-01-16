<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePropertyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // auth middleware already protects routes
    }

    public function rules(): array
    {
        return [
            'price' => ['required', 'numeric', 'min:0'],
            'rooms' => ['nullable', 'integer', 'min:0', 'max:100'],
            'garages' => ['nullable', 'integer', 'min:0', 'max:20'],
            'type' => ['required', Rule::in(['apartment', 'property', 'villa', 'studio', 'land', 'commercial'])],
            'status' => ['nullable', Rule::in(['available', 'reserved', 'sold', 'rented'])],
            'address_line' => ['nullable', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:12'],
            'city' => ['required', 'string', 'max:255'],
            'region' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:2'],
            'main_image' => ['nullable', 'image', 'max:10240'], // 10MB
            'published_at' => ['nullable', 'date'],

            // Translations
            'translations' => ['required', 'array', 'min:1'],
            'translations.*.locale' => ['required', 'string', 'max:5', Rule::in(config('localization.supported_locales'))],
            'translations.*.name' => ['required', 'string', 'max:255'],
            'translations.*.slug' => ['nullable', 'string', 'max:255'],
            'translations.*.description' => ['required', 'string'],

            // Gallery images
            'gallery_images' => ['nullable', 'array'],
            'gallery_images.*' => ['image', 'max:10240'],
        ];
    }

    public function messages(): array
    {
        return [
            'price.required' => __('validation.required', ['attribute' => 'price']),
            'type.required' => __('validation.required', ['attribute' => 'property type']),
            'type.in' => __('validation.in', ['attribute' => 'property type']),
            'postal_code.required' => __('validation.required', ['attribute' => 'postal code']),
            'city.required' => __('validation.required', ['attribute' => 'city']),
            'translations.required' => 'At least one translation is required.',
            'translations.*.name.required' => 'Property name is required for each language.',
            'translations.*.description.required' => 'Property description is required for each language.',
            'main_image.image' => __('validation.image', ['attribute' => 'main image']),
            'main_image.max' => 'Main image must not exceed 10MB.',
        ];
    }
}

