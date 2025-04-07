<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioPageController extends Controller
{
    public function portfolioPage(){
        return view('frontend.pages.portfolio-page');
    }
}
