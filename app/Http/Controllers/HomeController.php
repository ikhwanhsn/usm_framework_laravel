<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin(){
        // Cek apakah pengguna memiliki peran admin
        if(Auth::check() && Auth::user()->isAdmin()) {
            return view('admin');
        } else {
            return redirect()->route('home')->with('error', 'Anda tidak diizinkan mengakses halaman ini.');
        }
    }
}
