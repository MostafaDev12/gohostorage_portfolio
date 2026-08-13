<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Models\Dashboard\AboutStruct;
use App\Models\Dashboard\AboutUs;
use App\Models\Dashboard\Domain;
use App\Models\Dashboard\Hosting;
use App\Models\Dashboard\Plan;
use App\Models\Dashboard\Slider;
use App\Models\Faq;
use App\Models\Server;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['banners'] = Slider::home()->active()->get();
        $data['pop'] = Slider::pop()->active()->first();
        $data['hostings'] = Hosting::active()->home()->header()->take(8)->get();
        $data['hosting'] = Hosting::active()->home()->header()->first();
        $data['domains'] = Domain::active()->take(8)->get();
        $data['plans'] = Plan::with(['planAttributes.attribute.values', 'attributeValues'])
        ->active()
        ->home()
        ->take(3)
        ->get()
        ->shuffle();
        $data['servers'] = Server::with(['plans' => function ($query) {
            $query->where('status', 1)
                  ->with([
                      'planAttributes.attribute.values',
                      'attributeValues'
                  ]);
        }])->active()->home()->header()->take(4)->get();

        $data['about'] = AboutUs::first();
        $data['about_structs'] = AboutStruct::active()->orderBy('order')->get();
        $data['faqs'] = Faq::active()->general()->orderBy('order')->take(5)->get();
        $data['Benefits'] = Benefit::active()->orderBy('order')->general()->take(4)->get();

        return view('Website.home', $data);
    }
}
