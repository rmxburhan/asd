<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DetailTransaksi;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request) {
        $data = $request->validate([
           'username' => 'required',
           'password' => 'required', 
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();
            return redirect()->route('home')->with('status', 'Login successfully');
        }

        return back()->with('status', 'Username atau password anda salah');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('view.login')->with('status', 'Login successfully');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function summary(Request $request)
    {
        $detailtransaksi = DetailTransaksi::where('user_id', auth()->id())->where('status', 'cekout')->get();

        return view('summary', compact('detailtransaksi'));
    }
}
