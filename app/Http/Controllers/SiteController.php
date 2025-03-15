<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage(){
        $nameData = [
            'name'=> "Parvez Hossain",
            'profession'=> "Laravel Developer"
        ];

        return view('home', compact('nameData'));
    }

    public function aboutPage(){
        return view('about');
    }

    public function contactPage(){
        return view('contact');
    }

    public function portfolioPage(){
        return view('portfolio');
    }

    public function servicesPage(){
        return view('services');
    }
}
