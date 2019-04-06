<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    //
    protected $table = 'aturans';
    protected $fillable = ['judul','deskripsi']; 
    public $timestamps = true;
}
