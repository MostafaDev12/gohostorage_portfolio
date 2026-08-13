<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Builder;

use App\Traits\HasLanguage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasLanguage ,HasFactory;

    protected $table = 'sliders' ;

    protected $fillable = ['title_ar','title_en','title2_ar','title2_en','text_en','text_ar','image','order','alt_img','status','type'];

    public static function getTypeSelect()
    {
        return [
            'home'          => __('dashboard.home'),
            'top_header'   => __('dashboard.top_header'),
            'pop' => __('dashboard.pop')
            
        ];
    }

    public function getTitleAttribute()
    {
        return $this->{'title_'.$this->lang};
    }
    public function getSecoundTitleAttribute()
    {
        return $this->{'title2_'.$this->lang};
    }
    public function getTextAttribute()
    {
        return $this->{'text_'.$this->lang};
    }

    public function getImagePathAttribute()
    {
        return $this->attributes['image'] ? asset('uploads/sliders/' . $this->attributes['image']) : asset('assets/dashboard/images/noimage.png');
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', 1);
    }
    public function scopeHome(Builder $query): void
    {
        $query->where('type', 'home');
    }
    public function scopeTopHeader(Builder $query): void
    {
        $query->where('type', 'top_header');
    }
    public function scopePop(Builder $query): void
    {
        $query->where('type', 'pop');
    }
}
