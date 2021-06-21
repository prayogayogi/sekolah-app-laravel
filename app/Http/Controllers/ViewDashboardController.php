<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewDashboardController extends Controller
{
    // Untuk View Dashboard
    public function index()
    {
        return view('pages.home');
    }

    // Untuk about
    public function about()
    {
        return view('pages.about');
    }

    // Untuk Teacher
    public function teacher()
    {
        return view('pages.teacher');
    }

    // Untuk Teacher
    public function news()
    {
        return view('pages.news');
    }
}
