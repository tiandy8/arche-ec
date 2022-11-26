<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function detailProduk(Request $request,$id)
    {
        $data = Product::find($id);

        return view('pages.detail', compact('data') , (['judul' => 'Detail Produk' ]));
    }

    public function cart()
    {
        return view('pages.keranjang', ['judul' => 'Keranjang Belanja']);
    }



}
