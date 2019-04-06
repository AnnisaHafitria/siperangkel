<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TentangProgram extends Model
{
    //
    protected $table = 'tentang_programs';
    protected $fillable = ['judul','deskripsi']; 
    public $timestamps = true;
}
