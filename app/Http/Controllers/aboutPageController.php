<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutPageController extends Controller
{
    public function aboutPage(){
        return view('frontend.pages.about-page');
    }
}
