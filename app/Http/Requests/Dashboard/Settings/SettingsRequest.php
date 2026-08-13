<?php

namespace App\Http\Requests\Dashboard\Settings;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
                'site_email' => 'nullable|email|max:255',
                
                'site_facebook' => 'nullable|string|max:255',
                'site_twitter' => 'nullable|string|max:255',
                'site_instagram' => 'nullable|string|max:255',
                'site_linkedin' => 'nullable|string|max:255',
                'site_youtube' => 'nullable|string|max:255',
                'site_snapchat' => 'nullable|string|max:255',
                'site_tiktok' => 'nullable|string|max:255',
                'site_pinterest' => 'nullable|string|max:255',
                'site_telegram' => 'nullable|string|max:255',
                'site_map' => 'nullable|string',

                'country_code' => ['required', 'string'],
                'site_whatsapp' => ['required', 'string', function ($attribute, $value, $fail) {
                    $phonePatterns = [
                        '+1'    => '/^\d{10}$/',     // USA (10 digits)
                        '+44'   => '/^\d{10}$/',     // UK (10 digits)
                        '+971'  => '/^\d{9}$/',      // UAE (9 digits)
                        '+20'   => '/^\d{10}$/',     // Egypt (10 digits)
                        '+91'   => '/^\d{10}$/',     // India (10 digits)
                        '+966'  => '/^\d{9}$/',      // Saudi Arabia (9 digits)
                        '+33'   => '/^\d{9}$/',      // France (9 digits)
                        '+49'   => '/^\d{10}$/',     // Germany (10 digits)
                        '+81'   => '/^\d{10}$/',     // Japan (10 digits)
                        '+86'   => '/^\d{11}$/',     // China (11 digits)
                        '+55'   => '/^\d{10,11}$/',  // Brazil (10-11 digits)
                        '+7'    => '/^\d{10}$/',     // Russia (10 digits)
                        '+61'   => '/^\d{9}$/',      // Australia (9 digits)
                        '+34'   => '/^\d{9}$/',      // Spain (9 digits)
                        '+39'   => '/^\d{9,10}$/',   // Italy (9-10 digits)
                        '+62'   => '/^\d{9,13}$/',   // Indonesia (9-13 digits)
                        '+234'  => '/^\d{10}$/',     // Nigeria (10 digits)
                        '+92'   => '/^\d{10}$/',     // Pakistan (10 digits)
                        '+27'   => '/^\d{9}$/',      // South Africa (9 digits)
                    ];
    
                    $countryCode = request()->input('country_code');
    
                    if (!isset($phonePatterns[$countryCode])) {
                        $fail(__('Invalid country code.'));
                    } elseif (!preg_match($phonePatterns[$countryCode], $value)) {
                        $fail(__('Invalid phone number format for ') . $countryCode);
                    }
                }],
        ];
    }
}
