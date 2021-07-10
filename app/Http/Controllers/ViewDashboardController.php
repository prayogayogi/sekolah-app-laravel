<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewDashboardController extends Controller
{
    // Untuk View Dashboard
    public function index()
    {
        return view('pages.out.home');
    }

    // Untuk about
    public function about()
    {
        return view('pages.out.about');
    }

    // Untuk Teacher
    public function teacher()
    {
        return view('pages.out.teacher');
    }

    // Untuk news
    public function news()
    {
        return view('pages.out.news');
    }

    // Untuk contact
    public function contact()
    {
        return view('pages.out.contact');
    }

    // Untuk event
    public function event()
    {
        return view('pages.out.event');
    }
}
