<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homePageController extends Controller
{ 
        public function homePage(){
            $nameData = [
                'name'=> "Parvez Hossain",
                'profession'=> "Laravel Developer"
            ];
    
            return view('frontend.pages.home-page', compact('nameData'));
        }
}
