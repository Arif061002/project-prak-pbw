<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class absensiController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel absensi
        $absensi= DB::table('absensi')->get();

        // mengirim ke halaman absensi untuk ditampilkan data
        return view('dataabsensi',['absensi'=>$absensi]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('absensi')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/tampildata');
    }

    public function edit($nim)
    {
        #ambil data absensi berdasarkan nim
        $absensi = DB::table('absensi')->where('nim', $nim)->get();

        #passing data
        return view('edit', ['absensi' => $absensi]);
    }

    public function update(Request $request)
    {
        DB::table('absensi')->where('nim', $request->nim)->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kehadiran' => $request->kehadiran
            
        ]);

        return redirect('/tampildata');
    }

    public function hapus($nim)
    {
        DB::table('absensi')->where('nim', $nim)->delete();
        return redirect('/tampildata');
    }

}