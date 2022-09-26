<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil()
    {
        $data = User::all();
        return view('layout.profil', compact('data'));
    }
    public function editprofil()
    {
        $data = User::all();
        return view('layout.editprofil', compact('data'));
    }
}
