<?php

namespace App\Http\Requests\Dashboard\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'title2_en' => 'nullable|string|max:255',
            'title2_ar' => 'nullable|string|max:255',
            'short_desc_en' => 'nullable|string|max:4294967295',
            'short_desc_ar' => 'nullable|string|max:4294967295',
            'text_en' => 'nullable|string|max:4294967295',
            'text_ar' => 'nullable|string|max:4294967295',
            'image' => 'nullable|image|mimes:jpeg,png,gif,bmp,webp|max:1024', // Optional image validation
            'alt_image' => 'nullable|string',
            'banner' => 'nullable|image|max:3072', // Optional image validation
            'alt_banner' => 'nullable|string',

        ];
    }
}
