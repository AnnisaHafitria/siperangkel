<?php

namespace App\Http\Controllers;

use App\Pengembalian;
use Illuminate\Http\Request;
use App\Peminjaman;
use App\Anggota;
use App\Barang;
use DateTime;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengembalian = Pengembalian::all();
        $jumlah_denda = Pengembalian::sum('denda');
        return view('pengembalian.index',compact('pengembalian','jumlah_denda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }

    public function exportPDF()
    {
        $jumlah_denda = Pengembalian::sum('denda');
        $pengembalians = Pengembalian::limit(200)->get();
        $pdf = PDF::loadView('pengembalian/pdf', compact('pengembalians','jumlah_denda'));
        $pdf->setPaper('a4','potrait');
        return $pdf->download('Laporan Pengembalian.pdf');
        //return $pdf->stream();
        // return view('pengembalian/pdf', compact('pengembalians'));
        //return $pengembalians;
    }
    
    public function eksportExcel()
    {
        $jumlah_denda = Pengembalian::sum('denda');
        $pengembalians = DB::table('pengembalians')->get();
        $pengembalians = Pengembalian::with(['Anggota','Barang'])->get();
        //return $pengembalians;
        $datapengembalians = "";
            if(count($pengembalians) >0 ){
                $datapengembalians .='<table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pinjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Batas Waktu Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Denda</th>   
                    <th>Keterangan</th>      
                </tr>';
                $nomor = 1;
                $no = 1;
            foreach ($pengembalians as $pengembalian) {
                $datapengembalians .= '
                <tr>
                    <td>'.$no++.'</td>
                    <td>'.$pengembalian->Anggota->nama_anggota.'</td>
                    <td>'.$pengembalian->Barang->nama_barang.'</td>
                    <td>'.$pengembalian->jumlah_pinjam.'</td>
                    <td>'.$pengembalian->tanggal_pinjam.'</td>
                    <td>'.$pengembalian->tanggal_batas.'</td>
                    <td>'.$pengembalian->tanggal_kembali.'</td>
                    <td> Rp.'.$pengembalian->denda.',-</td>
                    <td>'.$pengembalian->keterangan.'</td>
                </tr>';
            }
            $datapengembalians .='</table>';
        }
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan Pengembalian.xls');
        echo $datapengembalians;
    }

    public function index1()
    {
        //
        $pengembalian = Pengembalian::all();
        return view('pengembalian.pengembalian', compact('pengembalian'));
    }

    public function index2(Request $request)
    {
        //
        $jumlah_denda = Pengembalian::sum('denda');
        $dari = $request->dari;
        $sampai = $request->sampai;
        $pengembalian = Pengembalian::whereBetween('created_at', [$dari, $sampai])->get();
        return view('pengembalian.pengembalian1', compact('pengembalian','dari','sampai','jumlah_denda'));
    }

    public function index3(Request $request)
    {   
        $jumlah_denda = Pengembalian::sum('denda');
        $dari = $request->dari;
        $sampai = $request->sampai;
        $pengembalian = Pengembalian::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('pengembalian/pengembalian2', compact('pengembalian','dari','sampai','jumlah_denda'));
        return $pdf->download('Laporan Pengembalian.pdf');
    }
}
