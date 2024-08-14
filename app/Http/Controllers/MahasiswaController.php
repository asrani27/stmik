<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function beranda()
    {
        return view('mahasiswa.beranda.index');
    }

    public function krs()
    {
        return view('mahasiswa.krs.index');
    }
    public function khs()
    {
        return view('mahasiswa.khs.index');
    }
    public function transkrip()
    {
        return view('mahasiswa.transkrip.index');
    }
}
