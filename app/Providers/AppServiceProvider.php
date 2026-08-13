<?php

namespace App\Providers;

use App\Models\Dashboard\Hosting;
use App\Models\Dashboard\Menu;
use App\Models\Dashboard\Slider;
use App\Models\Page;
use App\Models\Server;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Prevent lazy loading in non-production environments This is a good practice to avoid N+1 query problems

        Model::preventLazyLoading(! $this->app->isProduction());


        $lang = app()->getLocale();

        $configrations = Cache::remember("settings_{$lang}", 3600, function () use ($lang) {
            return Setting::where('lang', $lang)
                ->get()
                ->mapWithKeys(function ($item) {
                    return [$item->key => $item->value];
                })->toArray();
        });
        $settings = Cache::remember("settings", 3600, function ()  {
            return Setting::where('lang', 'all')
                ->get()
                ->mapWithKeys(function ($item) {
                    return [$item->key => $item->value];
                })->toArray();
        });

        Config::set('configrations', $configrations);

        Config::set('settings', $settings);

        // Share menus and hostings with all views
        $menus = Menu::orderBy('order','asc')->active()->get();



        $hostings = Hosting::with('sub_hostings')
        ->whereNull('parent_id')
        ->active()
        ->header()
        ->get();

        $footerServices = Service::footer()->active()->get();

        $top_header = Slider::TopHeader()->active()->first();

        $pages = Page::where('status',true)->get();

        $servers = Server::with('sub_servers')->header()->active()->get();

        View::share('menus', $menus);
        View::share('top_header', $top_header);
        View::share('hostings',$hostings);
        View::share('footerServices',$footerServices);
        View::share('pages', $pages);
        View::share('servers', $servers);
    }
}
