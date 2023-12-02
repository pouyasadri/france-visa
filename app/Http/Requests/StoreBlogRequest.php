<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Update this if you need to add authorization logic
    }

    public function rules(): array
    {
        return [
            'blog_title' => 'required|string|max:255',
            'blog_category' => 'required|string|max:255',
            'blog_slug' => 'required|string|max:255|unique:blogs,slug',
            'blog_body' => 'required|string',
            'blog_main_image' => 'required|image|max:2048', // Update max size as per your requirements
        ];
    }

    public function messages()
    {
        return [
            // You can add custom validation messages here
        ];
    }
}
