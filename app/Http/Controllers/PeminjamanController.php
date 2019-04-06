<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Anggota;
use App\Barang;
use App\Pengembalian;
use DateTime;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;

class PeminjamanController extends Controller
{
    use SessionFlash;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index',compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $anggota = Anggota::all();
        $barang = Barang::all();
        return view('peminjaman.create',compact('anggota','barang'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $this->validate($request,[
        //     'id_anggota' => 'required|',
        //     'id_barang' => 'required|',
        //     'jumlah_pinjam' => 'required|',
        //     'tanggal_batas' => 'required|'
        // ]);
        // $peminjaman = new Peminjaman;
        // $peminjaman->id_anggota = $request->id_anggota;
        // $peminjaman->id_barang = $request->id_barang;
        // $peminjaman->jumlah_pinjam = $request->jumlah_pinjam;
        // $peminjaman->tanggal_batas = $request->tanggal_batas;
        // $barang = Barang::findOrFail($peminjaman->id_barang);
        // $barang->persediaan = $barang->persediaan - $request->jumlah_pinjam;
        
        $requestFailed=array();
        $requestSuccess=array();
        for($id = 0; $id < count($request->id_barang); $id++){
            $barang = Barang::findOrFail($request->id_barang[$id]);
            if ($barang->persediaan < $request->jumlah_pinjam[$id]) {
                $requestFailed[]=" Maaf, ".$barang->nama_barang." Yang Akan Di Pinjam Hanya Tersisa ".$barang->persediaan;      
            }else{
                $peminjaman = new Peminjaman;
                $peminjaman->id_anggota = $request->id_anggota[$id];
                $peminjaman->id_barang = $request->id_barang[$id];
                $peminjaman->jumlah_pinjam = $request->jumlah_pinjam[$id];
                $peminjaman->jadwal = $request->jadwal[$id];
                $peminjaman->tanggal_batas = $request->tanggal_batas[$id];
                $peminjaman->save();

                $requestSuccess[]=" Berhasil, Meminjam ".$barang->nama_barang." Dengan Jumlah ".$request->jumlah_pinjam[$id];
            
                $barang->persediaan = $barang->persediaan - $request->jumlah_pinjam[$id];   
                $barang->save();

            }        
        }
        $message= "Rincian Peminjaman :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        for($i=0; $i<count($requestFailed);$i++){
            $message.= '<font color="red"><li>'.$requestFailed[$i].'</li></font>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("info","zmdi zmdi-check","",$message);
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $peminjaman = Peminjaman::findOrFail($id);
        $anggota = Anggota::all();
        $barang = Barang::all();
        $selectedAnggota = Peminjaman::findOrFail($id)->id_anggota;
        $selectedBarang = Peminjaman::findOrFail($id)->id_barang;
        return view('peminjaman.show',compact('peminjaman','anggota','barang','selectedAnggota','selectedBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->id_anggota;
        $pengembalian = new Pengembalian;
        $pengembalian->id_anggota = $request->id_anggota;
        $pengembalian->id_barang = $request->id_barang;
        $pengembalian->jumlah_pinjam = $request->jumlah_pinjam;
        $pengembalian->jadwal = $request->jadwal;
        $pengembalian->tanggal_pinjam = $request->tanggal_pinjam;
        $pengembalian->tanggal_batas = $request->tanggal_batas;
        $pengembalian->tanggal_kembali = $request->tanggal_kembali;
        $pengembalian->keterangan = $request->keterangan;

        $batasdate = $request->tanggal_batas;
        $kembalidate = $request->tanggal_kembali;
        $datetime1 = new DateTime($batasdate);
        $datetime2 = new DateTime($kembalidate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%r%a');

        if ($days > 0) {
            $denda = $days * 1000;

            // return "Batas Waktu Peminjaman : ".$batasdate.
            // "<br> Tanggal Pengembalian : ".$kembalidate.
            // "<br> Selisih Hari : ".$days. " Hari <br> Denda : Rp. ".$denda;
        } else {
            $denda = 0;
            // return "Batas Waktu Peminjaman : ".$batasdate.
            // "<br> Tanggal Pengembalian : ".$kembalidate. 
            // "Selisih Hari : ".$days. " Hari<br>Denda : 0";
        }

        $pengembalian->denda = $denda;
        $peminjaman = Peminjaman::findOrFail($id);
        $barang = Barang::findOrFail($request->id_barang);
        $barang->persediaan = $barang->persediaan + $request->jumlah_pinjam;

        $barang->save();
        $peminjaman->delete();
        $pengembalian->save();
        $this->NotifFlash("success","zmdi zmdi-check","Berhasil"," Mengembalikan $barang->nama_barang");
        return redirect()->route('pengembalian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }

    public function exporPDF()
    {
        $peminjamans = Peminjaman::limit(200)->get();
        $pdf = PDF::loadView('peminjaman/pdf', compact('peminjamans'));
        $pdf->setPaper('a4','potrait');
        return $pdf->download('Laporan Peminjaman.pdf');
        //return $pdf->stream();
        // return view('peminjaman/pdf', compact('peminjamans'));
        //return $peminjamans;
    }

    public function eksporExcel()
    {
        $peminjamans = DB::table('peminjamans')->get();
        $peminjamans = Peminjaman::with(['Anggota','Barang'])->get();
        //return $peminjamans;
        $datapeminjaman = "";
            if(count($peminjamans) > 0 ){
                $datapeminjaman .='<table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pinjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Batas Waktu Peminjaman</th> 
                    <th>Jadwal</td>        
                </tr>';
                $nomor = 1;
                $no = 1;
            foreach ($peminjamans as $peminjaman) {
                $datapeminjaman .= '
                <tr>
                    <td>'.$no++.'</td>
                    <td>'.$peminjaman->Anggota->nama_anggota.'</td>
                    <td>'.$peminjaman->Barang->nama_barang.'</td>
                    <td>'.$peminjaman->jumlah_pinjam.'</td>
                    <td>'.$peminjaman->created_at.'</td>
                    <td>'.$peminjaman->tanggal_batas.'</td>
                    <td>'.$peminjaman->jadwal.'</td>
                </tr>';
            }
            $datapeminjaman .='</table>';
        }
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan Peminjaman.xls');
        echo $datapeminjaman;
    }

    public function index1()
    {
        //
        $peminjaman = Peminjaman::all();
        return view('peminjaman.peminjaman', compact('peminjaman'));
    }

    public function index2(Request $request)
    {
        //
        $dari = $request->dari;
        $sampai = $request->sampai;
        $peminjaman = Peminjaman::whereBetween('created_at', [$dari, $sampai])->get();
        return view('peminjaman.peminjaman1', compact('peminjaman','dari','sampai'));
    }

    public function index3(Request $request)
    {   
        $dari = $request->dari;
        $sampai = $request->sampai;
        $peminjaman = Peminjaman::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('peminjaman.peminjaman2', compact('peminjaman','dari','sampai'));
        return $pdf->download('Laporan Peminjaman.pdf');
    }
}
