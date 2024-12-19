<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function classic()
    {
        return view('classic');
    }
    public function business()
    {
        return view('business');
    }
    public function suite()
    {
        return view('suite');
    }
    public function deluxe()
    {
        return view('deluxe');
    }
    public function checkin()
    {
        return view('checkin');
    }
    public function billing()
    {
        return view('billing');
    }
    public function billingnew()
    {
        return view('billingnew');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
}
