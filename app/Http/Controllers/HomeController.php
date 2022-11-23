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
    public function store(Request $request)
    {

        $order = $request->order;
        if($order == null){
            $datas = Product::latest()->get();
        } elseif($order == 'latest'){
            $datas = Product::latest()->get();
        } elseif($order == 'oldest'){
            $datas = Product::orderBy('created_at', 'ASC')->get();
        } elseif($order == 'title_asc'){
            $datas = Product::orderBy('nama_produk', 'ASC')->get();
        } elseif($order == 'title_desc'){
            $datas = Product::orderBy('nama_produk', 'DESC')->get();
        }

        if ($request->has('search')) {

            $datas = Product::where('nama_produk', 'LIKE' , '%' .$request->search . '%')->get();

        }

        return view('pages.store', compact('datas'));
    }
    public function service()
    {
        return view('pages.services');
    }



}
