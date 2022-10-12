<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Database\Events\TransactionCommitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Stringable;

class DetailTransaksiController extends Controller
{
    public function bayar(DetailTransaksi $detailtransaksi)
    {
        return view('bayar',compact('detailtransaksi'));
    }

    public function postbayar(Request $request, DetailTransaksi $detailtransaksi)
    {
        $request->validate([
            'bukti_pembayaran' => 'required',
            
        ]);

        $transaksi = Transaksi::create([
            'user_id' => Auth::id(),
            'total_harga' => $detailtransaksi->total_harga,
            'kode' => 'INV' . Str::random(8)
        ]);

        $detailtransaksi->update([
           'transaksi_id' => $transaksi->id,
           'status' => 'cekout',
           'bukti_pembayaran' => $request->bukti_pembayaran->store('images')
        ]);

        return redirect()->route('view.keranjang')->with('status', 'Berhasil cekout');
    }
}
