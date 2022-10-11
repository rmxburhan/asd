<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class AdminController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk', compact('data'));
    }
}
