<?php
namespace App\Services\Dashboard;

use App\Models\Benefit;
use App\Models\Dashboard\AboutStruct;
use App\Models\Dashboard\Attribute;
use App\Models\Dashboard\Domain;
use App\Models\Dashboard\Hosting;
use App\Models\Dashboard\Menu;
use App\Models\Dashboard\Plan;
use App\Models\Dashboard\Slider;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\SiteAddress;
use App\Models\Testimonial;

class DashboardService{

    public function changeStatus($model,$ids)
    {
        foreach ($ids as $id) {
            if ($model == 'hostings') {

                $updatedModel = Hosting::find($id);

            }
            if ($model == 'menus') {

                $updatedModel = Menu::find($id);

            }
            if ($model == 'sliders') {

                $updatedModel = Slider::find($id);

            }
            if ($model == 'domains') {

                $updatedModel = Domain::find($id);

            }
            if ($model == 'Benefits') {

                $updatedModel = Benefit::find($id);

            }
            if ($model == 'about-structs') {

                $updatedModel = AboutStruct::find($id);

            }
            if ($model == 'site-addresses') {

                $updatedModel = SiteAddress::find($id);

            }
            if ($model == 'pages') {

                $updatedModel = Page::find($id);

            }
            if ($model == 'attributes') {

                $updatedModel = Attribute::find($id);

            }
            if ($model == 'faqs') {

                $updatedModel = Faq::find($id);

            }
            if($model == 'testimonials'){

                $updatedModel = Testimonial::find($id);

            }
            if($model == 'plans'){

                $updatedModel = Plan::find($id);

            }
            if($model == 'services'){

                $updatedModel = Service::find($id);

            }
            if ($updatedModel) {

                $newStatus = $updatedModel->status == 1 ? 0 : 1;
                $updatedModel->update(['status' => $newStatus]);
            }
        }
        return true;
    }
}


?>
