<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Page Routes

Route::get('/', [SiteController::class, 'homePage'])->name ('home');

Route::get('/about', [SiteController::class, 'aboutPage'])->name ('about');

Route::get('/contact', [SiteController::class, 'contactPage'])->name ('contact');

Route::get('/portfolio', [SiteController::class, 'portfolioPage'])->name ('portfolio');

Route::get('/services', [SiteController::class, 'servicesPage'])->name ('services');