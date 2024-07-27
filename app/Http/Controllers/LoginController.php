<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('superadmin')) {
                Session::flash('success', 'Selamat Datang');
                return redirect('/superadmin/beranda');
            } elseif (Auth::user()->hasRole('mahasiswa')) {
                Session::flash('success', 'Selamat Datang');
                return redirect('/mahasiswa/beranda');
            } elseif (Auth::user()->hasRole('dosen')) {
                Session::flash('success', 'Selamat Datang');
                return redirect('/dosen/beranda');
            } else {
                Session::flash('success', 'Selamat Datang');
                return 'role lain';
            }
        }
        return view('login');
    }
    public function login(Request $req)
    {
        $remember = $req->remember ? true : false;
        $credential = $req->only('username', 'password');

        if (Auth::attempt($credential, $remember)) {

            if (Auth::user()->hasRole('superadmin')) {
                Session::flash('success', 'Selamat Datang');
                return redirect('/superadmin/beranda');
            } elseif (Auth::user()->hasRole('mahasiswa')) {
                Session::flash('success', 'Selamat Datang');
                return redirect('/mahasiswa/beranda');
            } elseif (Auth::user()->hasRole('dosen')) {
                Session::flash('success', 'Selamat Datang');
                return redirect('/dosen/beranda');
            } else {
                Session::flash('success', 'Selamat Datang');
                return 'role lain';
            }
        } else {
            Session::flash('error', 'username/password salah');
            $req->flash();
            return back();
        }
    }
}
