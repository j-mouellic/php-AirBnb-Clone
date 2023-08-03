<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required", "min:1", "string"],
            "description" => ["required", "min:1", "string"],
            "home_type" => ["required", "min:1", "string"],
            "city" => ["required", "min:1", "string"],
            "address" => ["required", "min:1", "string"],
            "postal_code" => ["required", "min:1", "integer"],
            "picture" => ["required", "min:1", "string"],
            "bedrooms" => ["required", "min:1", "integer"],
            "bathrooms" => ["required", "min:1", "integer"],
            "surface" => ["required", "min:10", "integer"],
            "price_per_night" => ["required", "min:1", "integer"],
        ];
    }
}
