<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        $datas = Product::latest()->get();

        return view('pages.store', compact('datas'));
    }
    public function service()
    {
        return view('pages.services');
    }



}
