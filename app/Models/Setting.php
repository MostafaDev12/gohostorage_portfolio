<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'lang'];

    public const IMAGE_KEYS = ['site_logo', 'site_footer_logo', 'site_favicon'];

    // Accessor for the image path
    public function getValueAttribute($value)
    {
        if (in_array($this->key, self::IMAGE_KEYS)) {
            return $value ? asset('uploads/configrations/' . $value) : asset('assets/dashboard/images/noimage.png');
        }
    
        return $value;
    }
    


}
