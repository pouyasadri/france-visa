<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHouseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "house_name" => 'required',
            "house_price" => 'required',
            "house_description" => "required",
            "house_room_count" => "required",
            "house_garage_count" => "required",
            "house_region" => "required",
            "house_postal_code" => "required",
            "house_exact_location" => "required",
            "house_main_image" => "required|image",
            "house_images.*" => "image",
            "house_type" => "required",
            "house_square" => "required",
        ];
    }
}
