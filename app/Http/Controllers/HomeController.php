<?php

namespace App\Http\Controllers;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Http\Request;
use App\Anggota;
use App\Barang;
use App\Peminjaman;
use App\Pengembalian;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        
    if (Laratrust::hasRole('guest')) return $this->guestDashboard();
     }
     protected function adminDashboard()
     {
        $anggota = Anggota::count('nis');
        $barang = Barang::count('nama_barang');
        $peminjaman = Peminjaman::count('created_at');
        $pengembalian = Pengembalian::count('created_at');
        $jumlah_denda = Pengembalian::sum('denda');
        return view('layouts.dashboard.admin',compact('anggota','barang','peminjaman','pengembalian','jumlah_denda'));
     }
       protected function guestDashboard() 
     {
        return view('layouts.dashboard.guest');
     }
    // {
    //     return view('home');
    // }
}
