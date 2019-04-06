<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;
use File;

class KontakController extends Controller
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
        $kontak = Kontak::all();
        return view('kontak.index',compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kontak.create');
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
        for($id = 0; $id < count($request->nama_kontak); $id++){
            $kontak = new Kontak;
            $kontak->nama_kontak = $request->nama_kontak[$id];
            $kontak->jabatan = $request->jabatan[$id];
            $kontak->nope = $request->nope[$id];
            $kontak->email = $request->email[$id];
            $kontak->facebook = $request->facebook[$id];
            $kontak->instagram = $request->instagram[$id];
            $kontak->alamat = $request->alamat[$id];
            $kontak->save();

                $requestSuccess[]=" Berhasil, Menambah Kontak ".$kontak->nama_kontak;     
        }
        $message= "Rincian Kontak :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('kontak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kontak = Kontak::findOrFail($id);
        return view('kontak.edit',compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'foto' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_kontak' => 'required|',
            'jabatan' => 'required|',
            'nope' => 'required|',
            'email' => 'required|',
            'facebook' => 'required|',
            'instagram' => 'required|',
            'alamat' => 'required|'
                    ]);
       $kontak = Kontak::findOrFail($id);
       if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/foto/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
        //hapus foto lama, jika ada
        if ($kontak->foto) {
            $old_foto = $kontak->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/foto'
            . DIRECTORY_SEPARATOR .$kontak->foto;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
        //file sudah dihapus atau tidak ada
                }
            }
        $kontak->foto = $filename;
        }
       $kontak->nama_kontak = $request->nama_kontak;
       $kontak->jabatan = $request->jabatan;
       $kontak->nope = $request->nope;
       $kontak->email = $request->email;
       $kontak->facebook = $request->facebook;
       $kontak->instagram = $request->instagram;
       $kontak->alamat = $request->alamat;

        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data kontak");
        $kontak->save();
        return redirect()->route('kontak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kontak = Kontak::findOrFail($id);
         if ($kontak->foto) {
            $old_foto = $kontak->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/foto/'
            . DIRECTORY_SEPARATOR . $kontak->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            //file sudah dihapus/tidak ada
            }
        }
        $kontak->delete();
        $this->NotifFlash("danger","zmdi zmdi-check","Berhasil,"," Menghapus Kontak ".$kontak->nama_kontak);
        return redirect()->route('kontak.index');
    }
}
