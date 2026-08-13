<?php

namespace App\Models\Dashboard;

use App\Support\WhmcsUrl;
use App\Traits\HasLanguage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasLanguage;

    protected $table = 'plans';

    protected $fillable = ['planable_id' , 'planable_type' ,'name_en','name_ar','lable','icon','alt_icon','image','alt_image','price_before_discount','monthly_price','yearly_price','slug_en','slug_ar','status','show_in_home','meta_title_ar','meta_title_en','meta_desc_ar','meta_desc_en','index'];

    public function planAttributes()
    {
        return $this->hasMany(PlanAttribute::class);
    }

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'plan_attribute_values')
                    ->withPivot('attribute_id');
    }

    public function planable()
    {
        return $this->morphTo();
    }

    public function getFormattedAttributes()
{
    return $this->planAttributes->map(function ($planAttribute) {
        // Get the attribute name
        $attributeName = $planAttribute->attribute->name;

        // Get the related values for the current plan attribute
        $values = $this->attributeValues
            ->where('attribute_id', $planAttribute->attribute_id)
            ->pluck('value_en')
            ->join(', ');

        return [
            'name' => $attributeName,
            'values' => $values,
        ];
    });
}

    public function getNameAttribute()
    {
        return $this->{'name_'.$this->lang } ;
    }



    public function hosting()
    {
        return $this->belongsTo(Hosting::class);
    }

    public function getImagePathAttribute()
    {
        return $this->attributes['image'] ? asset('uploads/plans/' . $this->attributes['image']) : asset('assets/dashboard/images/noimage.png');
    }

    public function getIconPathAttribute()
    {
        return $this->attributes['icon'] ? asset('uploads/plans/' . $this->attributes['icon']) : asset('assets/dashboard/images/noIcon.png');
    }


    public function scopeActive(Builder $query): void
    {
        $query->where('status', 1);
    }

    public function scopeHome(Builder $query): void
    {
        $query->where('show_in_home', 1);
    }

    public function getSlugAttribute()
    {
        // Order links are stored per-language as absolute URLs. Normalise the
        // host so a row still carrying the shop's old hostname cannot send the
        // customer back to this portfolio instead of the shop.
        return WhmcsUrl::normalize($this->{'slug_'.$this->lang });
    }

}
