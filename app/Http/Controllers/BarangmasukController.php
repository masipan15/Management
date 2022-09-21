<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangmasukController extends Controller
{
    public function barangmasuk(){
        return view('masuk.barangmasuk');
    }
}
