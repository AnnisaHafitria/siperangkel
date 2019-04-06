<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = 'peminjamans';
    protected $fillable = ['id_anggota','id_barang','jumlah_pinjam','jadwal','tanggal_batas'];
    public $timestamps = true;

    public function Anggota()
	{
		return $this->belongsTo('App\Anggota','id_anggota');
    }
    public function Barang()
	{
		return $this->belongsTo('App\Barang','id_barang');
    }
}
