<?php

namespace App\Http\Requests\Dashboard\Plans;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePlanRequest extends FormRequest
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
            'planable_id' => 'nullable|integer',
            'planable_type' => 'nullable|string',
            'name_en' => ['required', 'string'],
            'name_ar' => ['required', 'string'],
            'lable' => ['nullable', 'string'],
            'price_before_discount' => ['nullable'],
            'monthly_price' => ['nullable'],
            'yearly_price' => ['nullable', ],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,gif,bmp,webp', 'max:1024'],
            'icon' => ['nullable', 'mimes:jpeg,png,gif,bmp,webp', 'max:1024'],
            'alt_image' => ['nullable', 'string', 'max:255'],
            'alt_icon' => ['nullable', 'string', 'max:255'],
            'short_desc_en' => ['nullable', 'string'],
            'short_desc_ar' => ['nullable', 'string'],
            'status' => ['nullable', 'boolean'],
            'show_in_home' => ['nullable', 'boolean'],
            'meta_title_en' => ['nullable', 'string', 'max:255'],
            'meta_title_ar' => ['nullable', 'string', 'max:255'],
            'meta_desc_ar' => ['nullable', 'string'],
            'meta_desc_en' => ['nullable', 'string'],
            'index' => ['nullable', 'boolean'],
            'slug_en' => ['required','string','max:255','unique:pages,slug_en,' . $this->route('plan')->id],
            'slug_ar' => ['required','string','max:255','unique:pages,slug_ar,' . $this->route('plan')->id],


            'attributes_IDS' => ['nullable','array']
        ];
    }
}
