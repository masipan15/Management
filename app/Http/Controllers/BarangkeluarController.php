<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
    public function index()
    {
        return view('keluar.barangklr');
    }
}
