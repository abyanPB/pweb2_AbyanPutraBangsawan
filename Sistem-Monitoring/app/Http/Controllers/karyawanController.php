<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanController extends Controller
{
    public function spv(){
        $karyawan = karyawan::all();
        return view('admin.dashboard',['karyawanlist' => $karyawan]);
    }

    public function show()
    {
        $karyawan = karyawan::all();
        return view('admin.karyawan-kelola',['karyawanlist' => $karyawan]);
    }

    public function create()
    {
        return view('admin.karyawan-form');
    }

    public function store(Request $request)
    {
        $karyawan = karyawan::create($request->all());
        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('admin.karyawan-edit',['karyawanlist' => $karyawan]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = karyawan::findOrFail($id);

        $karyawan->update($request->all());
        return redirect('/karyawan');
    }

    public function destroy($id)
    {
        $hapus = karyawan::findOrFail($id);
        $hapus->delete();
        return redirect('/karyawan');
    }
}
