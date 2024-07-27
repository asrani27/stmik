<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuperadminController extends Controller
{
    public function beranda()
    {
        return view('superadmin.beranda.index');
    }

    public function jurusan()
    {
        $data = Jurusan::get();
        return view('superadmin.jurusan.index', compact('data'));
    }
    public function jurusan_add()
    {
        return view('superadmin.jurusan.add');
    }
    public function jurusan_store(Request $req)
    {
        Jurusan::create($req->all());
        Session::flash('success', 'Di simpan');
        return redirect('/superadmin/data/jurusan');
    }
    public function jurusan_edit($id)
    {
        $data = Jurusan::findOrFail($id);
        return view('superadmin.jurusan.edit', compact('data'));
    }
    public function jurusan_update(Request $req, $id)
    {
        Jurusan::find($id)->update($req->all());
        Session::flash('success', 'Di Update');
        return redirect('/superadmin/data/jurusan');
    }
    public function jurusan_delete(Request $req)
    {
        Jurusan::findOrFail($req->id)->delete();
        Session::flash('success', 'Di Hapus');
        return back();
    }

    public function role()
    {
        $data = Role::get();
        return view('superadmin.role.index', compact('data'));
    }
    public function role_add()
    {
        return view('superadmin.role.add');
    }
    public function role_store(Request $req)
    {
        $check = Role::where('name', $req->name)->first();
        if ($check == null) {
            Role::create($req->all());
            Session::flash('success', 'Di simpan');
            return redirect('/superadmin/setting/role');
        } else {
            Session::flash('info', 'role sudah ada');
            return back();
        }
    }
    public function role_edit($id)
    {
        $data = Role::findOrFail($id);
        return view('superadmin.role.edit', compact('data'));
    }
    public function role_update(Request $req, $id)
    {
        Role::find($id)->update($req->all());
        Session::flash('success', 'Di Update');
        return redirect('/superadmin/setting/role');
    }
    public function role_delete(Request $req)
    {
        Role::findOrFail($req->id)->delete();
        Session::flash('success', 'Di Hapus');
        return back();
    }

    public function matakuliah()
    {
        return view('superadmin.matakuliah.index');
    }

    public function kurikulum()
    {
        return view('superadmin.kurikulum.index');
    }

    public function mahasiswa()
    {
        return view('superadmin.mahasiswa.index');
    }
}
