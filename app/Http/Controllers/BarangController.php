<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;
use File;

class BarangController extends Controller
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
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
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
        for($id = 0; $id < count($request->nama_barang); $id++){
            $barang = new Barang;
            $barang->nama_barang = $request->nama_barang[$id];
            $barang->persediaan = $request->persediaan[$id];
            $barang->satuan = $request->satuan[$id];
            $barang->kondisi = $request->kondisi[$id];
            $barang->foto = $request->foto[$id];
            $barang->save();

                $requestSuccess[]=" Berhasil, Menambah Barang ".$barang->nama_barang." Dengan Persediaan ".$request->persediaan[$id];     
        }
        $message= "Rincian Barang :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('barang.index');
        
        // $this->validate($request,[
        //     'nama_barang' => 'required|unique:barangs',
        //     'persediaan' => 'required|',
        //     'kondisi' => 'required|',
        //     'foto' => ''
        // ]);
        // $barang = new Barang;
        // $barang->nama_barang = $request->nama_barang;
        // $barang->persediaan = $request->persediaan;
        // $barang->kondisi = $request->kondisi;
        // //upload foto
        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $destinationPath = public_path().'/assets/img/foto/';
        //     $filename = str_random(6).'_'.$file->getClientOriginalName();
        //     $uploadSuccess = $file->move($destinationPath, $filename);
        //     $barang->foto = $filename;
        //     }
        // $barang->save();
        // $this->NotifFlash("success","zmdi zmdi-check","Berhasil,"," Menambah Barang $barang->nama_barang");
        // return redirect()->route('barang.index');
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
        $barang = Barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
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
            'nama_barang' => 'required|',
            'persediaan' => 'required|',
            'kondisi' => 'required|',
            'foto' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
       $barang = Barang::findOrFail($id);
       $barang->nama_barang = $request->nama_barang;
       $barang->persediaan = $request->persediaan;
       $barang->satuan = $request->satuan;
       $barang->kondisi = $request->kondisi;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/foto/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
        //hapus foto lama, jika ada
        if ($barang->foto) {
            $old_foto = $barang->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/foto'
            . DIRECTORY_SEPARATOR .$barang->foto;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
        //file sudah dihapus atau tidak ada
                }
            }
        $barang->foto = $filename;
        }
        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data Barang");
        $barang->save();
        return redirect()->route('barang.index');
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
        $barang = Barang::findOrFail($id);
         if ($barang->foto) {
            $old_foto = $barang->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/foto/'
            . DIRECTORY_SEPARATOR . $barang->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            //file sudah dihapus/tidak ada
            }
        }
        $barang->delete();
        return redirect()->route('barang.index');
    }

    public function eksporPDF()
    {
        $barangs = Barang::limit(1000)->get();
        $pdf = PDF::loadView('barang/pdf', compact('barangs'));
        $pdf->setPaper('a4','potrait');
        return $pdf->download('Laporan Barang.pdf');
        //return $pdf->stream();
        // return view('barang/pdf', compact('barangs'));
        //return $barangs;
    }

    public function exporExcel()
    {
        $barangs = DB::table('barangs')->get();
        //return $barangs;
        $databarang = "";
            if(count($barangs) > 0 ){
                $databarang .='<table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Persediaan</th>
                    <th>Kondisi</th>
                    <th>Barang Telah Ada Sejak</th>
                    <th>Barang Di Ubah Pada</th>        
                </tr>';
                $nomor = 1;
                $no = 1;
            foreach ($barangs as $barang) {
                $databarang .= '
                <tr>
                    <td>'.$no++.'</td>
                    <td>'.$barang->nama_barang.'</td>
                    <td>'.$barang->persediaan.'&nbsp;'.$barang->satuan.'</td>
                    <td>'.$barang->kondisi.'</td>
                    <td>'.$barang->created_at.'</td>
                    <td>'.$barang->updated_at.'</td>
                </tr>';
            }
            $databarang .='</table>';
        }
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan Barang.xls');
        echo $databarang;
    }

    public function index1()
    {
        //
        $barang = Barang::all();
        return view('barang.barang', compact('barang'));
    }

    public function index2(Request $request)
    {
        //
        $dari = $request->dari;
        $sampai = $request->sampai;
        $barang = Barang::whereBetween('created_at', [$dari, $sampai])->get();
        return view('barang.barang1', compact('barang','dari','sampai'));
    }

    public function index3(Request $request)
    {   
        $dari = $request->dari;
        $sampai = $request->sampai;
        $barang = Barang::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('barang.barang2', compact('barang','dari','sampai'));
        return $pdf->download('Laporan Barang.pdf');
    }
}

