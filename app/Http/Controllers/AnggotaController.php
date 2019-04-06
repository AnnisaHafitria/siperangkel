<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;

class AnggotaController extends Controller
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
        $anggota = Anggota::all();
        return view('anggota.index',compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('anggota.create');
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
        $requestSuccess=array();
        for($id = 0; $id < count($request->nis); $id++){
            $anggota = new Anggota;
            $anggota->nis = $request->nis[$id];
            $anggota->nama_anggota = $request->nama_anggota[$id];
            $anggota->jk = $request->jk[$id];
            $anggota->jurusan = $request->jurusan[$id];
            $anggota->nope = $request->nope[$id];
            $anggota->alamat = $request->alamat[$id];
            $anggota->save();

                $requestSuccess[]=" Berhasil, Menambah Anggota ".$anggota->nama_anggota." Dengan NIS ".$request->nis[$id];     
        }
        $message= "Rincian Anggota :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('anggota.index');
        
        // $this->validate($request,[
        //     'nis' => 'required|unique:anggotas',
        //     'nama_anggota' => 'required|',
        //     'jurusan' => 'required|',
        //     'nope' => 'required|',
        //     'alamat' => 'required|'
        // ]);
        // $anggota = new Anggota;
        // $anggota->nis = $request->nis;
        // $anggota->nama_anggota = $request->nama_anggota;
        // $anggota->jurusan = $request->jurusan;
        // $anggota->nope = $request->nope;
        // $anggota->alamat = $request->alamat;
        // $anggota->save();
        // $this->NotifFlash("success","zmdi zmdi-check","Berhasil,"," Menambah Anggota $anggota->nama_anggota");
        // return redirect()->route('anggota.index');
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
        $anggota = Anggota::findorFail($id);
        return view('anggota.edit',compact('anggota'));
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
        //
        $this->validate($request,[
            'nis' => 'required|',
            'nama_anggota' => 'required|',
            'jk' => 'required|',
            'jurusan' => 'required|',
            'nope' => 'required|',
            'alamat' => 'required|'
        ]);
        $anggota = Anggota::find($id);
        $anggota->nis = $request->nis;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jk = $request->jk;
        $anggota->jurusan = $request->jurusan;
        $anggota->nope = $request->nope;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data Anggota");
            return redirect()->route('anggota.index');
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
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        $this->NotifFlash("danger","zmdi zmdi-check","Berhasil,"," Menghapus Anggota ".$anggota->nama_anggota." Dengan NIS ".$anggota->nis);
            return redirect()->route('anggota.index');
    }

    public function eksportPDF()
    {
        $anggotas = Anggota::limit(1000)->get();
        $pdf = PDF::loadView('anggota/pdf', compact('anggotas'));
        $pdf->setPaper('a4','potrait');
        return $pdf->download('Laporan Anggota.pdf');
        //return $pdf->stream();
        // return view('anggota/pdf', compact('anggotas'));
        //return $anggotas;
    }

    public function exportExcel()
    {
        $anggotas = DB::table('anggotas')->get();
        //return $anggotas;
        $dataanggota = "";
            if(count($anggotas) > 0 ){
                $dataanggota .='<table border="1">
                <tr>
                    <th>No</th>
                    <th>Nomor Induk Siswa</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Menjadi Anggota Sejak</th> 
                    <th>Anggota Di Ubah Pada</th>            
                </tr>';
                $nomor = 1;
                $no = 1;
            foreach ($anggotas as $anggota) {
                $dataanggota .= '
                <tr>
                    <td>'.$no++.'</td>
                    <td>'.$anggota->nis.'</td>
                    <td>'.$anggota->nama_anggota.'</td>
                    <td>'.$anggota->jk.'</td>
                    <td>'.$anggota->jurusan.'</td>
                    <td>'.$anggota->nope.'</td>
                    <td>'.$anggota->alamat.'</td>
                    <td>'.$anggota->created_at.'</td>
                    <td>'.$anggota->updated_at.'</td>
                </tr>';
            }
            $dataanggota .='</table>';
        }
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan Anggota.xls');
        echo $dataanggota;
    }

    public function index1()
    {
        //
        $anggota = Anggota::all();
        return view('anggota.anggota', compact('anggota'));
    }

    public function index2(Request $request)
    {
        //
        $dari = $request->dari;
        $sampai = $request->sampai;
        $anggota = Anggota::whereBetween('created_at', [$dari, $sampai])->get();
        return view('anggota.anggota1', compact('anggota','dari','sampai'));
    }

    public function index3(Request $request)
    {   
        $dari = $request->dari;
        $sampai = $request->sampai;
        $anggota = Anggota::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('anggota.anggota2', compact('anggota','dari','sampai'));
        return $pdf->download('Laporan Anggota.pdf');
    }
}
