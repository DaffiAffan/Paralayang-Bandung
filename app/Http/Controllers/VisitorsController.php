<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function home()
    {
        return view('visitors.home', []);
    }
    public function about()
    {
        return view('visitors.about-us', []);
    }
    public function gallery()
    {
        return view('visitors.gallery', []);
    }
    public function tandem()
    {
        return view('visitors.tandem', []);
    }
    public function contact()
    {
        return view('visitors.contact', []);
    }
}
