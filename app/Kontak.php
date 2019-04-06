<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    //
    protected $table = 'kontaks';
    protected $fillable = ['foto','nama_kontak','jabatan','nope','email','facebook','instagram']; 
    public $timestamps = true;
}
