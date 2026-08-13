<?php

use App\Http\Controllers\Dashboard\AboutStructController;
use App\Http\Controllers\Dashboard\AboutUsController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\AttributeController;
use App\Http\Controllers\Dashboard\AttributeValueController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DomainController;
use App\Http\Controllers\Dashboard\HostingBenefitController;
use App\Http\Controllers\Dashboard\HostingController;
use App\Http\Controllers\Dashboard\HostingFaqController;
use App\Http\Controllers\Dashboard\MenuController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SiteAddressController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Models\SiteAddress;
use Dotenv\Store\File\Paths;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::resource('hostings', HostingController::class);
Route::resource('hostings.benefits',HostingBenefitController::class);
Route::resource('hostings.faqs',HostingFaqController::class);

Route::resource('attributes', AttributeController::class);
Route::resource('attributes.values', AttributeValueController::class);

Route::resource('plans', PlanController::class);
Route::get('plans/{plan}/attributes-values', [PlanController::class, 'createPlanAttributeValues'])->name('plan.createAttributeValues');
Route::post('plans/{plan}/attributes-values', [PlanController::class, 'storeAttributeValues'])->name('plans.storeAttributeValues');

ROute::post('{modelname}/change-status/{ids}', [DashboardController::class, 'changeStatus'])->name('change.status');

Route::resource('menus', MenuController::class);
Route::resource('sliders', SliderController::class);
Route::resource('domains', DomainController::class);
Route::get('about-us', [AboutUsController::class, 'edit'])->name('about.edit');
Route::patch('about-us/{about}', [AboutUsController::class, 'update'])->name('about.update');
Route::resource('about-structs', AboutStructController::class);
Route::resource('roles', RoleController::class);
Route::resource('admins', AdminController::class);

Route::resource('faqs', \App\Http\Controllers\Dashboard\FaqController::class);

Route::get('settings', [SettingController::class, 'show'])->name('settings.show');
Route::patch('settings', [SettingController::class, 'update'])->name('settings.update');

Route::get('configrations/{lang}', [\App\Http\Controllers\Dashboard\ConfigrationController::class, 'edit'])->name('configrations.edit');
Route::patch('configrations/{lang}', [\App\Http\Controllers\Dashboard\ConfigrationController::class, 'update'])->name('configrations.update');

Route::resource('benefits', \App\Http\Controllers\Dashboard\BenefitController::class);
Route::resource('testimonials', \App\Http\Controllers\Dashboard\TestimonialController::class);
Route::resource('services',ServiceController::class);
Route::resource('site-addresses',SiteAddressController::class);
Route::resource('pages', \App\Http\Controllers\Dashboard\PageController::class);
Route::resource('servers',\App\Http\Controllers\Dashboard\ServersController::class);

