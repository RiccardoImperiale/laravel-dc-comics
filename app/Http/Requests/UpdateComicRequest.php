<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:25',
            'description' => 'required|min:10|max:200',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:25',
            'sale_date' => 'required|max:25',
            'type' => 'nullable|max:25',
        ];
    }
}
