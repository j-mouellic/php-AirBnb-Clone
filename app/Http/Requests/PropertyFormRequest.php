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



    public function rules(): array
    {
        return [
            "title" => ["required"],
            "description" => ["required"],
            "home_type" => ["required"],
            "city" => ["required"],
            "address" => ["required"],
            "postal_code" => ["required"],
            "bedrooms" => ["required"],
            "bathrooms" => ["required"],
            "surface" => ["required"],
            "price_per_night" => ["required"],
            "user_id" => ["required"]
        ];
    }
}
