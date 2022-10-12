<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Produk;
class AdminController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk', compact('data'));
    }

    public function storeproduk(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'kategori' => 'required',
            'harga' => 'required|min:0|not_in:0',
            'foto' => 'required',
        ]);

        Produk::create([
            'name' => $data['name'],
            'kategori_id' => $data['kategori'],
            'harga' => $data['harga'],
            'foto' => $data['foto']->store('images')
        ]);

        return redirect()->route('view.produk.admin')->with('status', 'Produk berhasil ditambahkan');
    }

    public function edit(Produk $produk)
    {
        $kategoris = Kategori::all();
        return view('edit', compact('kategoris', 'produk'));
    }

    public function updateproduk(Request $request, Produk $produk)
    {
              
    }
}
