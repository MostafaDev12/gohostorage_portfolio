<?php

namespace App\Models;

use App\Traits\HasLanguage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory , HasLanguage;

    protected $table = 'services';
    protected $fillable = ['name_ar','name_en','parent_id','short_desc_ar','short_desc_en','long_desc_ar','long_desc_en','image','alt_image','icon','alt_icon','status','show_in_home','show_in_header','show_in_footer','slug_ar','slug_en','meta_title_ar','meta_title_en','meta_desc_ar','meta_desc_en','index'];

    public function parent()
    {
        return $this->belongsTo(Service::class,'parent_id');
    }

    public function getNameAttribute()
    {
        return $this->{'name_'.$this->lang};
    }

    public function getShortDescAttribute()
    {
        return $this->{'short_desc_'.$this->lang};
    }

    public function getLongDescAttribute()
    {
        return $this->{'long_desc_'.$this->lang};
    }

    public function getImagePathAttribute()
    {
        return $this->attributes['image'] ? asset('uploads/services/' . $this->attributes['image']) : asset('assets/dashboard/images/noimage.png');
    }

    public function getIconPathAttribute()
    {
        return $this->attributes['icon'] ? asset('uploads/services/' . $this->attributes['icon']) : asset('assets/dashboard/images/noIcon.png');
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', 1);
    }

    public function scopeHome(Builder $query): void
    {
        $query->where('show_in_home', 1);
    }

    public function scopeFooter(Builder $query): void
    {
        $query->where('show_in_footer', 1);
    }

        public function scopeHeader(Builder $query): void
    {
        $query->where('show_in_header', true);
    }


    public function getSlugAttribute()
    {
        return $this->{'slug_'.$this->lang} ? $this->{'slug_'.$this->lang} : '#';
    }
}
