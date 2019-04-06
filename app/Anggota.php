<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $table = 'anggotas';
    protected $fillable = ['nis','nama_anggota','jk','jurusan','nope','alamat']; 
    public $timestamps = true;
}
