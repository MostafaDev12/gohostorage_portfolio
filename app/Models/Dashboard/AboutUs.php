<?php

namespace App\Models\Dashboard;

use App\Traits\HasLanguage;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasLanguage;
   protected $table = 'about';
   
   protected $fillable = ['title_ar','title_en','title2_en','title2_ar','short_desc_ar','short_desc_en','text_ar','text_en','image','alt_image','banner','alt_banner'];

   public function getTitleAttribute()
   {
    return $this->{'title_'.$this->lang } ;
   }

   public function getSubTitleAttribute()
   {
    return $this->{'title2_'.$this->lang } ;
   }

   public function getShortDescAttribute()
   {
    return $this->{'short_desc_'.$this->lang } ;
   }



   public function getImagePathAttribute()
   {
       return $this->attributes['image'] ? asset('uploads/about/' . $this->attributes['image']) : asset('assets/dashboard/images/noimage.png');
   }

   public function getBannerPathAttribute()
   {
       return $this->attributes['banner'] ? asset('uploads/about/' . $this->attributes['banner']) : asset('assets/dashboard/images/noimage.png');
   }
}
