<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil()
    {
        $data = Profil::all();
        return view('layout.profil', compact('data'));
    }
}
