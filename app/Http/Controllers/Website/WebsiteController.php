<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\StoreContactUsRequest;
use App\Models\Benefit;
use App\Models\Dashboard\AboutStruct;
use App\Models\Dashboard\AboutUs;
use App\Models\Dashboard\Domain;
use App\Models\Dashboard\Hosting;
use App\Models\Dashboard\Plan;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Server;
use App\Models\Service;
use App\Models\SiteAddress;
use App\Models\Testimonial;
use App\Services\Website\ContactUsService;
use App\Services\Website\StoreContactUsService;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about()
    {
        $data['about'] = AboutUs::first();
        $data['about_structs'] = AboutStruct::active()->get();
        $data['Benefits'] = Benefit::active()->general()->take(4)->get();
        $data['testimonials'] = Testimonial::active()->get();

        return view('Website.about', $data);
    }

    public function showHosting($slug)
    {
        $data['hosting'] = Hosting::with([
            // Filter only active plans
            'plans' => function ($query) {
                $query->where('status', 1)
                      ->with([
                          'planAttributes.attribute.values',
                          'attributeValues'
                      ]);
            },
            'benefits' => function ($query) {
                $query->active()->take(4);
            },
            'faqs' => function ($query) {
                $query->active();
            }
        ])
        ->where('slug_en', $slug)
        ->orWhere('slug_ar', $slug)
        ->active()
        ->firstOrFail();

        $data['testimonials'] = Testimonial::active()->get();

        return view('Website.hosting-details', $data);
    }

     public function showServer($slug)
    {
        $data['server'] = Server::with([
            // Filter only active plans
            'plans' => function ($query) {
                $query->where('status', 1)
                      ->with([
                          'planAttributes.attribute.values',
                          'attributeValues'
                      ]);
            },
            // 'benefits' => function ($query) {
            //     $query->active()->take(4);
            // },
            // 'faqs' => function ($query) {
            //     $query->active();
            // }
        ])
        ->where('slug_en', $slug)
        ->orWhere('slug_ar', $slug)
        ->active()
        ->firstOrFail();

        // $data['testimonials'] = Testimonial::active()->get();

        return view('Website.server-details', $data);
    }

    public function services()
    {
        $data['services'] = Service::active()->get();
        $data['benefits'] = Benefit::active()->take(4)->get();
        $data['faqs'] = Faq::active()->general()->take(4)->get();
        $data['testimonials'] = Testimonial::active()->get();

        return view('Website.services', $data);
    }

    public function domains()
    {
        $data['domains'] = Domain::active()->get();
        $data['benefits'] = Benefit::active()->take(4)->get();
        $data['faqs'] = Faq::active()->Domains()->take(4)->get();
        $data['testimonials'] = Testimonial::active()->get();
        return view('Website.domains', $data);
    }

    public function showContactUs()
    {
        $site_addresses = SiteAddress::active()->first();
     
        return view('Website.contact-us', compact('site_addresses'));
    }

    public function saveContactUs(StoreContactUsRequest $request)
    {
        try {

            $data = $request->validated();

            $response = (new ContactUsService)->store($data);

            if (!$response) {
                return redirect()->back()->with(['error' => __('website.failed_to_send_message')]);
            }

            return redirect()->back()->with(['success' => __('website.thanks_for_contacting_us')]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => __('website.something wrong pls try letter')]);
        }
    }

    public function faqs()
    {
        $data['general_faqs'] =  Faq::general()->active()->get();
        $data['technical_issues'] =  Faq::TechnicalIssue()->active()->get();
        $data['domains_faqs'] =  Faq::domains()->active()->get();
        $data['hostings_faqs'] =  Faq::hostings()->active()->get();
        $data['support_faqs'] =  Faq::support()->active()->get();


        return view('Website.faqs', $data);
    }

    public function showPage($slug)
    {

        $data['page'] = Page::where('slug_en',$slug)
        ->orWhere('slug_ar', $slug)
        ->firstOrFail();

        return view('Website.page-details', $data);
    }
}
