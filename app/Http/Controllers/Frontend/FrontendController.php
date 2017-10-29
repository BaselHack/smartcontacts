<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function home()
    {

        return view('frontend.home.index');
    }


    public function concept()
    {

        return view('frontend.concept.index');
    }


    public function register()
    {

        return view('frontend.register.index');
    }

    public function contact()
    {

        return view('frontend.contact.index');
    }


    public function happy()
    {

        return view('frontend.happy.index');
    }

}
