<?php

namespace App\Http\Requests\Admin\Requests;

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
            'title' => ['required', 'min:4'],
            'description' => ['required', 'min:8'],
            'price' => ['required','integer'],
            'surface' => ['required', 'integer'],
            'rooms' => ['required', 'integer'],
            'bedrooms' => ['required', 'integer'],
            'floor' => ['required', 'integer'],
            'city' => ['required'],
            'address' => ['required'],
            'postal_code' => ['required'],
            'sold' => ['required', 'boolean'],
        ];
    }
}
