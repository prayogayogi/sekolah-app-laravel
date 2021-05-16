<?php

namespace App\Http\Controllers;

use App\Headmaster;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $headmaster = [];
        return View('pages.home', compact('headmaster'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function teacher()
    {
        return view('pages.teacher');
    }
    public function berita()
    {
        return view('pages.beritaTerbaru');
    }
    public function kegiatan()
    {
        return view('pages.event');
    }
    public function kontak()
    {
        return view('pages.contact');
    }
}
