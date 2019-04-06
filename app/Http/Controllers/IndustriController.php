<?php

namespace App\Http\Controllers;

use App\Industri;
use Illuminate\Http\Request;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;
use File;

class IndustriController extends Controller
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
        $industri = Industri::all();
        return view('industri.index',compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('industri.create');
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
        for($id = 0; $id < count($request->nama_industri); $id++){
            $industri = new Industri;
            $industri->nama_industri = $request->nama_industri[$id];
            $industri->kerja_sama = $request->kerja_sama[$id];
            $industri->deskripsi = $request->deskripsi[$id];
            $industri->save();

                $requestSuccess[]=" Berhasil, Menambah Industri ".$industri->nama_industri;     
        }
        $message= "Rincian Industri :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('industri.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function show(Industri $industri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $industri = Industri::findOrFail($id);
        return view('industri.edit',compact('industri'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'foto' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_industri' => 'required|',
            'kerja_sama' => 'required|',
            'deskripsi' => 'required|'
        ]);
       $industri = Industri::findOrFail($id);
       if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/foto/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
        //hapus foto lama, jika ada
        if ($industri->foto) {
            $old_foto = $industri->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/foto'
            . DIRECTORY_SEPARATOR .$industri->foto;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
        //file sudah dihapus atau tidak ada
                }
            }
        $industri->foto = $filename;
        }
       $industri->nama_industri = $request->nama_industri;
       $industri->kerja_sama = $request->kerja_sama;
       $industri->deskripsi = $request->deskripsi;
        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data Industri");
        $industri->save();
        return redirect()->route('industri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $industri = Industri::findOrFail($id);
         if ($industri->foto) {
            $old_foto = $industri->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/foto/'
            . DIRECTORY_SEPARATOR . $industri->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            //file sudah dihapus/tidak ada
            }
        }
        $industri->delete();
        $this->NotifFlash("danger","zmdi zmdi-check","Berhasil,"," Menghapus Data Industri".$industri->nama_industri);
        return redirect()->route('industri.index');
    }
}
