<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    //
    protected $table = 'industris';
    protected $fillable = ['foto','nama_industri','kerja_sama','deskripsi']; 
    public $timestamps = true;
}
