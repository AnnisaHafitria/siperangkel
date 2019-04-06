<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    //
    protected $table = 'pengembalians';
    protected $fillable = ['id_anggota','id_barang','jumlah_pinjam','tanggal_pinjam','tanggal_batas','jadwal','tanggal_kembali','denda','keterangan'];
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
