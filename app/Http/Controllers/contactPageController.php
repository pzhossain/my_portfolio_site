<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactPageController extends Controller
{
    public function contactPage(){
        return view('frontend.pages.contact-page');
    }
}
