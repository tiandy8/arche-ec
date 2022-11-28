<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Carts;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Auth;

class ProductController extends Controller
{

    public function detailProduk(Request $request,$id)
    {
        $data = Product::find($id);

        return view('pages.detail', compact('data') , (['judul' => 'Detail Produk' ]));
    }

    public function cart()
    {
        $barangs = Carts::where('user_id', Auth::user()->id)->get();

        return view('pages.keranjang', compact('barangs'), (['judul' => 'Keranjang Belanja'])) ;
    }

    public function apusBarang($id)
    {
        $barang = Carts::where('barang_id', $id)->first();
        $barang->delete();

        return redirect()->back();

    }

    public function apusSemua()
    {
        $barangs = Carts::where('user_id', Auth::user()->id)->delete();

        return redirect()->back();

    }


    public function checkout(Request $request) {

        $tanggal = Carbon::now();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->tanggal = $tanggal;
        $order->status = 'unpaid';
        $order->jumlah_harga = $request->total;
        $order->save();

        $getOrder =Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();

        $barangs = Carts::where('user_id', Auth::user()->id)->get();

        foreach($barangs as $barang){

            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $getOrder->id;
            $orderDetail->barang_id = $barang->barang_id;
            $orderDetail->jumlah = $barang->jumlah;
            $orderDetail->jumlah_harga = $barang->jumlah_harga;
            $orderDetail->save();


            $b = Product::where('id', $barang->barang->id)->first();
            $b->stok = $b->stok - $barang->jumlah;
            echo $b->id;
            $b->save();

        }

        Carts::where('user_id', Auth::user()->id)->delete();

            return redirect('invoice/' .  $getOrder->id) ;
    }


    public function invoice($id)
    {
        $data = Order::find($id);
        return view('pages.invoice', compact('data'),(['judul' => 'Detail Produk' ]) );
    }

    public function gantiQty(Request $request, $id)
    {

        $barang = Product::where('id', $id)->first();

        $pesanan = Carts::where('user_id', Auth::user()->id)->where('barang_id', $id)->first();
        $pesanan->jumlah = $request->jumlah_pesan;
        $pesanan->jumlah_harga = $barang->harga * $pesanan->jumlah;
        $pesanan->update();

        return redirect()->back();


    }


    public function pemesanan(Request $request, $id)
    {
        $barang = Product::where('id', $id)->first();
        $tanggal = Carbon::now();

        // apakah melebihi stok
        if($request->jumlah_pesan > $barang->stok)
        {
            return redirect('detail-produk/'.$id);
        }

        // cek pesanan

        $pesanan = Carts::where('user_id', Auth::user()->id)->where('barang_id', $id)->first();

        if (empty($pesanan)) {

            $pesanan = new Carts();
            $pesanan->user_id = Auth::user()->id;
            $pesanan->barang_id = $barang->id;
            $pesanan->jumlah = $request->jumlah_pesan;
            $pesanan->jumlah_harga = $barang->harga*$request->jumlah_pesan;
            $pesanan->save();

        }else{
            $pesanan->jumlah = $pesanan->jumlah + $request->jumlah_pesan;
            $pesanan->jumlah_harga = $barang->harga * $pesanan->jumlah;
            $pesanan->save();
        }

        return redirect()->back()->with('status', 'Produk Berhasil Ditambahkan ke Keranjang!..');
    }


}
