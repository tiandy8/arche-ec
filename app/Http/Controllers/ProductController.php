<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function detailProduk($id)
    {
        $data = Product::find($id);
        return view('pages.detail');
    }





}
