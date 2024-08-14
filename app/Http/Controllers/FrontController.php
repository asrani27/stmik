<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/superadmin/beranda');
        } else {
            return view('welcome');
        }
    }
}
