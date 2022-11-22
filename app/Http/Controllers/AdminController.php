<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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



}
