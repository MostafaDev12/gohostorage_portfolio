<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasLanguage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Menu extends Model
{
    use HasLanguage;

    protected $table = 'menus';

    protected $fillable = ['name_en', 'name_ar', 'parent_id', 'segment', 'status', 'order', 'type'];

    public static function getSegmentSelect()
    {
        return [
            '/'          => __('dashboard.home'),
            'about-us'   => __('dashboard.about_us'),
            'hostings'   => __('dashboard.hostings'),
            'services' => __('dashboard.categories'),
            'servers' => __('dashboard.servers'),
        ];
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function getParentNameAttribute()
    {
        $lang = app()->getLocale();
        return $this->parent ? $this->parent->{'name_' . $lang} : __('dashboard.no_parent');
    }

    public function getNameAttribute()
    {
        $lang = app()->getLocale();
        return $this->{'name_' . $lang};
    }


    public function scopeActive(Builder $query): void
    {
        $query->where('status', 1);
    }

    public function getLinkAttribute()
    {

        return $this->segment ? LaravelLocalization::LocalizeUrl($this->segment) : '#';
    }

    public function scopeOrderDesc(Builder $query): void
    {
        $query->orderBy('order', 'desc');
    }
}
