<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Illuminate\Http\Request;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;

class TestimoniController extends Controller
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
        $testimoni = Testimoni::all();
        return view('testimoni.index',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $testimoni = Testimoni::all();
        return view('testimoni.create',compact('testimoni'));
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
        for($id = 0; $id < count($request->jumlah); $id++){
            $testimoni = new Testimoni;
            $testimoni->jumlah = $request->jumlah[$id];
            $testimoni->judul = $request->judul[$id];
            $testimoni->save();

                $requestSuccess[]=" Berhasil, Menambah ".$testimoni->judul;     
        }
        $message= "Rincian Testimoni :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $testimoni = Testimoni::findorFail($id);
        return view('testimoni.edit',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request,[
            'jumlah' => 'required|',
            'judul' => 'required|'
        ]);
        $testimoni = Testimoni::find($id);
        $testimoni->jumlah = $request->jumlah;
        $testimoni->judul = $request->judul;
        $testimoni->save();
        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data");
            return redirect()->route('testimoni.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        $this->NotifFlash("danger","zmdi zmdi-check","Berhasil,"," Menghapus ".$testimoni->judul);
            return redirect()->route('testimoni.index');
    }
}
