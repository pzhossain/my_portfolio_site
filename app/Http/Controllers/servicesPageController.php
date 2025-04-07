<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesPageController extends Controller
{
    public function servicesPage(){
        return view('frontend.pages.services-page');
    }
}
