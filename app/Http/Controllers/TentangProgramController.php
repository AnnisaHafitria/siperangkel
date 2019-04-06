<?php

namespace App\Http\Controllers;

use App\TentangProgram;
use Illuminate\Http\Request;
use App\Traits\SessionFlash;
use PDF;
use DB;
use Excel;
use DateTime;

class TentangProgramController extends Controller
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
        $tentang_program = TentangProgram::all();
        return view('tentang_program.index',compact('tentang_program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tentang_program = TentangProgram::all();
        return view('tentang_program.create',compact('tentang_program'));
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
            $tentang_program = new TentangProgram;
            $tentang_program->judul = $request->judul[$id];
            $tentang_program->deskripsi = $request->deskripsi[$id];
            $tentang_program->save();

                $requestSuccess[]=" Berhasil, Menambah ".$tentang_program->judul;     
        }
        $message= "Rincian Tentang Program :";
        $message.= "<ul>";
        for($i=0; $i<count($requestSuccess);$i++){
            $message.= '<li> '.$requestSuccess[$i].'</li>'; 
        }
        $message.="</ul>";
        $this->NotifFlash("success","zmdi zmdi-check","",$message);
        return redirect()->route('tentang_program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TentangProgram  $tentangProgram
     * @return \Illuminate\Http\Response
     */
    public function show(TentangProgram $tentangProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TentangProgram  $tentangProgram
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tentang_program = TentangProgram::findorFail($id);
        return view('tentang_program.edit',compact('tentang_program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TentangProgram  $tentangProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'judul' => 'required|',
            'deskripsi' => 'required|'
        ]);
        $tentang_program = TentangProgram::find($id);
        $tentang_program->judul = $request->judul;
        $tentang_program->deskripsi = $request->deskripsi;
        $tentang_program->save();
        $this->NotifFlash("warning","zmdi zmdi-check","Berhasil,"," Mengubah Data");
            return redirect()->route('tentang_program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TentangProgram  $tentangProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tentang_program = TentangProgram::findOrFail($id);
        $tentang_program->delete();
        $this->NotifFlash("danger","zmdi zmdi-check","Berhasil,"," Menghapus ".$tentang_program->judul);
            return redirect()->route('tentang_program.index');
    }
}
