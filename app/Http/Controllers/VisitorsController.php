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
    public function contact()
    {
        return view('visitors.contact', []);
    }
    public function cililin()
    {
        return view('visitors.cililinTandem', []);
    }
    public function ciater()
    {
        return view('visitors.ciaterTandem', []);
    }
}
