<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\aboutPageController;
use App\Http\Controllers\contactPageController;
use App\Http\Controllers\servicesPageController;
use App\Http\Controllers\portfolioPageController;

//Page Routes

Route::get('/', [homePageController::class, 'homePage'])->name ('home');

Route::get('/about', [aboutPageController::class, 'aboutPage'])->name ('about');

Route::get('/contact', [contactPageController::class, 'contactPage'])->name ('contact');

Route::get('/portfolio', [portfolioPageController::class, 'portfolioPage'])->name ('portfolio');

Route::get('/services', [servicesPageController::class, 'servicesPage'])->name ('services');