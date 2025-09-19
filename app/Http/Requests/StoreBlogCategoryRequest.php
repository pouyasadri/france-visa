<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // routes are protected by auth middleware where needed
    }

    public function rules(): array
    {
        return [
            'parent_id' => ['nullable', 'string'],

            // Allow either flat fields or translations[] array
            'locale' => ['nullable', 'string', 'max:5'],
            'name' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],

            'translations' => ['sometimes', 'array'],
            'translations.*.locale' => ['required_with:translations', 'string', 'max:5'],
            'translations.*.name' => ['nullable', 'string', 'max:255'],
            'translations.*.slug' => ['nullable', 'string', 'max:255'],
        ];
    }
}
