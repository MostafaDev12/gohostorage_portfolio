<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');
Route::get('about-us',[WebsiteController::class,'about'])->name('about-us');
Route::get('hostings', HomeController::class)->name('hostings');
Route::get('hostings/{slug}',[WebsiteController::class,'showHosting'])->name('hosting.show');
Route::get('services',[WebsiteController::class,'services'])->name('services');
Route::get('domains',[WebsiteController::class , 'domains'])->name('domains');
Route::get('contact-us',[WebsiteController::class,'showContactUs'])->name('contact-us');
Route::post('save-contact-us',[WebsiteController::class,'saveContactUs'])->name('saveConatct');
Route::get('faqs',[WebsiteController::class,'faqs'])->name('faqs');
Route::get('pages/{page}',[WebsiteController::class,'showPage'])->name('page.show');
Route::get('servers/{slug}',[WebsiteController::class,'showServer'])->name('server.show');
