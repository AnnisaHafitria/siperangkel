<?php

namespace App\Http\Controllers;

use App\Aturan;
use Illuminate\Http\Request;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;

class AturanController extends Controller
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
        $aturan = Aturan::all();
        return view('aturan.index',compact('aturan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aturan.create');
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
        for($id = 0; $id < count($request->judul); $id++){
            $aturan = new Aturan;
            $aturan->judul = $request->judul[$id];
            $aturan->aturan = $request->aturan[$id];
            $aturan->save();

                $requestSuccess[]=" Berhasil, Menambah Aturan ".$aturan->judul;     
        }
        $message= "Rincian Aturan :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('aturan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function show(Aturan $aturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aturan = Aturan::findorFail($id);
        return view('aturan.edit',compact('aturan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $this->validate($request,[
            'judul' => 'required|',
            'aturan' => 'required|'
        ]);
        $aturan = aturan::find($id);
        $aturan->judul = $request->judul;
        $aturan->aturan = $request->aturan;
        $aturan->save();
        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data aturan");
            return redirect()->route('aturan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aturan = Aturan::findOrFail($id);
        $aturan->delete();
        $this->NotifFlash("danger","zmdi zmdi-check","Berhasil,"," Menghapus Aturan ".$aturan->judul);
            return redirect()->route('aturan.index');
    }
}
