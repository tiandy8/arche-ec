<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function events()
    {
        return view('pages.events');
    }
    public function offlineStore()
    {
        return view('pages.offline');
    }
    public function store()
    {
        return view('pages.store');
    }



}
