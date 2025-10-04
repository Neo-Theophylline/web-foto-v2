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

