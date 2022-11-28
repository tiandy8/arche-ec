<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Message;
use App\Models\Service;
use App\Models\Order;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        $products = Product::latest()->get();
        return view('admin.products', compact('products'));

    }

    public function productCreate()
    {
        return view('admin.create');
    }

    public function productStore(Request $request)
    {

        $data = new Product();
        $data->nama_produk = $request->nama_produk;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->stok = $request->stok;

        $gambar_produk = $request->gambar_produk;

            $photoName = $gambar_produk->getClientOriginalName();
            $destination = 'photos';
            $gambar_produk->move($destination, $photoName);
            $data->gambar_produk = $photoName;

        $data->save();

        return redirect()->route('products');
    }


    public function productEdit($id)
    {

        $product = Product::find($id);
        return view('admin.edit', compact('product'));

    }

    public function updateImage(Request $request, $id)
    {
        $request->validate([
            'gambar_produk' => 'required|image'
        ]);

        $product = Product::findOrFail($id);
        // if ($request->gambar_produk) {
        //     unlink('photos/' . $product->gambar_produk);
        //     $gambar = $request->file('gambar')->store('products');
        //     $car->update(['gambar' => $gambar]);

        // }

        if ($request->gambar_produk) {
                unlink('photos/' . $product->gambar_produk);
                $gambar_produk = $request->gambar_produk;

                $photoName = $gambar_produk->getClientOriginalName();
                $destination = 'photos';
                $gambar_produk->move($destination, $photoName);
                $product->gambar_produk = $photoName;
                $product->update();


            }


            return redirect()->back()->with([
                'message'=>'gambar berhasil diedit',
                'alert-type'=> 'info'
            ]);



    }

    public function productUpdate(Request $request, $id)
    {
        $data = Product::find($id);
        $data->nama_produk = $request->nama_produk;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->update();

        return redirect()->route('products');

    }



    public function productDestroy(Request $request, $id)
    {

        $product = Product::find($id);
        unlink("photos/". $product->gambar_produk);
        $product->delete();



        return redirect()->back();



    }

    public function pesan()
    {

        $messages = Message::latest()->get();
        return view('admin.pesan', compact('messages'));
    }


    public function messagesDestroy($id)
    {
        $data = Message::find($id);
        $data->delete();

        return redirect()->back();




    }


    public function serviss()
    {
        $serviss = Service::latest()->get();
        return view('admin.servis', compact('serviss'));

    }

    public function servisCreate()
    {
        return view('admin.create-service');
    }

    public function servisStore(Request $request)
    {

        $data = new Service();
        $data->nama_service = $request->nama_service;
        $data->deskripsi = $request->deskripsi;

        $gambar_service = $request->gambar_service;

            $photoName = $gambar_service->getClientOriginalName();
            $destination = 'foto';
            $gambar_service->move($destination, $photoName);
            $data->gambar_service = $photoName;

        $data->save();

        return redirect()->route('serviss');
    }


    public function servisEdit($id)
    {

        $services = Service::find($id);
        return view('admin.edit-service', compact('services'));

    }

    public function updateServiceImage(Request $request, $id)
    {
        $request->validate([
            'gambar_service' => 'required|image'
        ]);

        $service = Service::findOrFail($id);
        // if ($request->gambar_produk) {
        //     unlink('photos/' . $product->gambar_produk);
        //     $gambar = $request->file('gambar')->store('products');
        //     $car->update(['gambar' => $gambar]);

        // }

        if ($request->gambar_service) {
                unlink('foto/' . $service->gambar_service);
                $gambar_service = $request->gambar_service;

                $photoName = $gambar_service->getClientOriginalName();
                $destination = 'foto';
                $gambar_service->move($destination, $photoName);
                $service->gambar_service = $photoName;
                $service->update();


            }


            return redirect()->back()->with([
                'message'=>'gambar berhasil diedit',
                'alert-type'=> 'info'
            ]);



    }

    public function servisUpdate(Request $request, $id)
    {
        $data = Service::find($id);
        $data->nama_service = $request->nama_service;
        $data->deskripsi = $request->deskripsi;
        $data->update();

        return redirect()->route('serviss');

    }



    public function servisDestroy(Request $request, $id)
    {

        $service = Service::find($id);
        unlink("foto/". $service->gambar_service);
        $service->delete();



        return redirect()->back();



    }

    public function order()
    {
        $datas = Order::latest()->get();

        return view('admin.pesanan', compact('datas'));
    }

    public function orderDetail($id)
    {
        $data = Order::find($id);



        return view('admin.pesanan-detail',compact('data'));
    }


    public function updateStatus(Request $request, $id)
    {
        $data = Order::find($id);

        $data->status = $request->status;
        $data->update();

        return redirect()->back()->with('status', "Status Pemesanan berhasil di update");
    }






}
