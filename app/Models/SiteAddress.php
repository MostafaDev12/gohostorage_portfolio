<?php

namespace App\Models;

use App\Traits\HasLanguage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteAddress extends Model
{
    /** @use HasFactory<\Database\Factories\SiteAddressFactory> */
    use HasFactory ,HasLanguage;

    protected $table = 'site_addresses';
    
    protected $fillable =['title_ar','title_en','address_ar','address_en','email','phone','phone2','map_url','order','status'];

    public function getTitleAttribute()
    {
        return $this->{'title_'.$this->lang};
    }
    public function getAddressAttribute()
    {
        return $this->{'address_'.$this->lang};
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    
    


}
