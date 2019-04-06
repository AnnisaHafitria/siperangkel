<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    protected $table = 'jurusans';
    protected $fillable = ['judul','deskripsi']; 
    public $timestamps = true;
}
