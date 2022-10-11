<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Produk;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('home', compact('data'));
    }

    public function detail(Produk $produk) {
        return view('detail', compact('produk'));
    }

    public function keranjang() {
        $data = DetailTransaksi::where('status', 'keranjang')->where('user_id', Auth::id())->with('Produk')->get();
        return view('keranjang', compact('data'));
    }

    public function postkeranjang(Request $request, Produk $produk)
    {
        try {
            $data = $request->validate([
                'qty' => 'required|numeric|min:0|not_in:0'
            ]);
        } catch (Exception $ex) {
            return back()->with('status', 'Gagal memasukan produk kedalam keranjang');
        }

        DetailTransaksi::create([
            'user_id' => Auth::id(),
            'produk_id' => $produk->id ,
            'qty' => $request->qty,
            'statis' => 'keranjang',
            'total_harga' => $produk->harga * $request->qty
        ]);

        return back()->with('status', 'Produk berhasil dimasukan kedalam keranjang');
    }
}
