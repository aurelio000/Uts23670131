<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.home');
    }

    public function about(): View
    {
        return view('landing.about');
    }

    public function feature(): View
    {
        return view('landing.features');
    }

    public function course(): View
    {
        return view('landing.courses');
    }

    public function blog(): View
    {
        return view('landing.blog');
    }

    public function contact(): View
    {
        return view('landing.contact');
    }
}
