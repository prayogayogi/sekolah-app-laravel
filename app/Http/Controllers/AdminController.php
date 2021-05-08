<?php

namespace App\Http\Controllers;

use App\Headmaster;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // UntuK Dashboard
    public function index()
    {
        return view('pages.pagesAdmin.dashboard');
    }
}
