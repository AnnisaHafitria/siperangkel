<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    //
    protected $table = 'testimonis';
    protected $fillable = ['jumlah','judul']; 
    public $timestamps = true;
}
