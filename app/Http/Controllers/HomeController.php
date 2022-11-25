<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $datas = Product::take(2)->get();

        return view('pages.home' , compact('datas'));
    }
    public function about()
    {
        return view('pages.about' , (['judul' => 'About']));
    }
    public function faq()
    {
        return view('pages.faq' , (['judul' => 'FAQ']));
    }
    public function contact()
    {
        return view('pages.contact' , (['judul' => 'Contact']));
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'message' => 'pesan anda berhasil dikirim',
            'alert-type' => 'success'
        ]);

    }

    public function events()
    {
        return view('pages.events' , (['judul' => 'Events']));
    }
    public function offlineStore()
    {
        return view('pages.offline' , (['judul' => 'Offline Store']));
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

        return view('pages.store', compact('datas') , (['judul' => 'Store']));
    }
    public function service(Request $request)
    {

        $order = $request->order;
        if($order == null){
            $datas = Service::latest()->get();
        } elseif($order == 'latest'){
            $datas = Service::latest()->get();
        } elseif($order == 'oldest'){
            $datas = Service::orderBy('created_at', 'ASC')->get();
        } elseif($order == 'title_asc'){
            $datas = Service::orderBy('nama_service', 'ASC')->get();
        } elseif($order == 'title_desc'){
            $datas = Service::orderBy('nama_service', 'DESC')->get();
        }

        if ($request->has('search')) {

            $datas = Service::where('nama_service', 'LIKE' , '%' .$request->search . '%')->get();

        }


        return view('pages.services' , compact('datas'),(['judul' => 'Services']));
    }



}
