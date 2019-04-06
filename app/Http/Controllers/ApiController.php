<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class ApiController extends Controller
{
    //
    function list_barang(){
    	return response()->json(\App\Barang::all(),200);
    }
}
