<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function AboutUs() {
        return view('site.about-us');
    }
}
