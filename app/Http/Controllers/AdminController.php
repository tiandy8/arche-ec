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
        if ($request->validated()) {

            $gambar = $request->file('gambar')->store('assets/produk', 'public');
            Product::create($request->except('gambar') + ['gambar' => $gambar]);

        }

        return redirect()->route('products')->with([
            'message' => 'Data sukses dibuat',
            'alert-type' => 'success'
        ]);
    }



}
