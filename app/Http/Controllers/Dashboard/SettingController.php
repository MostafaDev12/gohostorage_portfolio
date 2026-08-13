<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Settings\SettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function show()
    {
        $settings = Setting::where('lang', 'all')->pluck('value', 'key');
    
        // Define the known country codes
        $countryCodes = ['+20', '+966', '+971', '+1'];
    
        $storedNumber = $settings['site_whatsapp'] ?? '';
        $countryCode = '';
        $phoneNumber = $storedNumber;
    
        foreach ($countryCodes as $code) {
            if (str_starts_with($storedNumber, $code)) {
                $countryCode = $code;
                $phoneNumber = substr($storedNumber, strlen($code));
                break;
            }
        }
    
        $settings['country_code'] = $countryCode;
        $settings['site_whatsapp'] = $phoneNumber;
    
        return view('Dashboard.Settings.edit', compact('settings'));
    }

    public function update(SettingsRequest $request)
    {
        try{
          // Begin a transaction
             DB::beginTransaction();

            $data = $request->validated();

            $data['site_whatsapp'] = $data['country_code'] . $data['site_whatsapp'];
    
            // Optional: remove the country code key if you don't want to store it separately
            unset($data['country_code']);
            
            foreach ($data as $key => $value) {
                Setting::where('key', $key)->update(['value' => $value]);
            }

             // Clear settings cache for this language
             Cache::forget("settings");
            DB::commit();
            return redirect()->back()->with(['success' => __('dashboard.your_item_updated_successfully')]);
        }catch (\Exception $e){
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with(['error' => __('dashboard.something_went_wrong')]);
        }
       
    }
}
