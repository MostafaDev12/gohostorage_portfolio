<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(function () {
        Route::middleware('web')
            ->prefix(LaravelLocalization::setLocale())
            ->group(base_path('routes/web.php'));

        Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
            ->prefix(LaravelLocalization::setLocale() . '/dashboard')
            ->name('dashboard.')
            ->group(base_path('routes/web/dashboard/auth.php'));

        Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:admin'])
            ->prefix(LaravelLocalization::setLocale() . '/dashboard')
            ->name('dashboard.')
            ->group(base_path('routes/web/dashboard/dashboard.php'));
            

        Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
            ->prefix(LaravelLocalization::setLocale())
            ->name('website.')
            ->group(base_path('routes/web/website/website.php'));
    })
    ->withMiddleware(function ($middleware) {
 
         $middleware->redirectGuestsTo('dashboard/login');
         
        $middleware->alias([
           
            'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
            'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
         
        ]);
    })
    ->withExceptions(function ($exceptions) {
        // Handle exceptions here if needed
    })
    ->create();
