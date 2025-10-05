<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeFrontendController;
use App\Http\Controllers\frontend\AboutFrontendController;
use App\Http\Controllers\frontend\ContactFrontendController;
use App\Http\Controllers\frontend\ServiceFrontendController;

// FRONTEND
Route::get('', [HomeFrontendController::class, 'index'])->name('home');
Route::get('about', [AboutFrontendController::class, 'index'])->name('about');
Route::get('service', [ServiceFrontendController::class, 'index'])->name('service');
Route::get('contact', [ContactFrontendController::class, 'index'])->name('contact');

Route::get('adminpanel/hero', function (){
    return view('pages.backend.hero.index');
});
Route::get('adminpanel/hero/create', function (){
    return view('pages.backend.hero.create');
});
Route::get('adminpanel/hero/edit', function (){
    return view('pages.backend.hero.edit');
});

Route::get('adminpanel/home', function (){
    return view('pages.backend.home.index');
});

Route::get('adminpanel/about', function (){
    return view('pages.backend.about.index');
});
Route::get('adminpanel/about/create', function (){
    return view('pages.backend.about.create');
});
Route::get('adminpanel/about/edit', function (){
    return view('pages.backend.about.edit');
});

Route::get('adminpanel/history', function (){
    return view('pages.backend.history.index');
});
Route::get('adminpanel/history/create', function (){
    return view('pages.backend.history.create');
});
Route::get('adminpanel/history/edit', function (){
    return view('pages.backend.history.edit');
});

Route::get('adminpanel/contact', function (){
    return view('pages.backend.contact.index');
});
Route::get('adminpanel/contact/create', function (){
    return view('pages.backend.contact.create');
});
Route::get('adminpanel/contact/edit', function (){
    return view('pages.backend.contact.edit');
});

Route::get('adminpanel/gallery', function (){
    return view('pages.backend.gallery.index');
});
Route::get('adminpanel/gallery/create', function (){
    return view('pages.backend.gallery.create');
});
Route::get('adminpanel/gallery/edit', function (){
    return view('pages.backend.gallery.edit');
});

Route::get('adminpanel/media/create', function (){
    return view('pages.backend.media.create');
});
Route::get('adminpanel/media', function (){
    return view('pages.backend.media.index');
});
Route::get('adminpanel/media/edit', function (){
    return view('pages.backend.media.edit');
});

Route::get('adminpanel/partner', function (){
    return view('pages.backend.partner.index');
});
Route::get('adminpanel/partner/create', function (){
    return view('pages.backend.partner.create');
});
Route::get('adminpanel/partner/edit', function (){
    return view('pages.backend.partner.edit');
});

Route::get('adminpanel/service', function (){
    return view('pages.backend.service.index');
});
Route::get('adminpanel/service/create', function (){
    return view('pages.backend.service.create');
});
Route::get('adminpanel/service/edit', function (){
    return view('pages.backend.service.edit');
});

Route::get('adminpanel/testimonial', function (){
    return view('pages.backend.testimonial.index');
});
Route::get('adminpanel/testimonial/create', function (){
    return view('pages.backend.testimonial.create');
});
Route::get('adminpanel/testimonial/edit', function (){
    return view('pages.backend.testimonial.edit');
});

Route::get('adminpanel/worker', function (){
    return view('pages.backend.worker.index');
});
Route::get('adminpanel/worker/create', function (){
    return view('pages.backend.worker.create');
});
Route::get('adminpanel/worker/edit', function (){
    return view('pages.backend.worker.edit');
});