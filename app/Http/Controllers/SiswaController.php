<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Poin;
use App\PoinDetail;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $siswas = Siswa::all();

        return view('siswa.index', ['siswas' => $siswas]);
    }

    public function create()
    {
        $poins = Poin::all();
        return view('siswa.create', ['poins' => $poins]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'nis' => 'required|min:6|max:6',
        'nama' => 'required|min:3',
        ]);

        Siswa::create([
          'nis' => $request->nis,
          'nama' => $request->nama
        ]);

        Poin::create([
          'nis' => $request->nis,
          'jml_poin' => env('APP_POINAWAL')
        ]);

        $poins_id = Poin::where('nis', $request->nis)->first();
        PoinDetail::create([
          'poins_id' => $poins_id->id,
          'kode' => 'R000'
        ]);
        return redirect('/siswa')->with('success', 'Berhasil Menambahkan Siswa Baru.');
    }

    public function show($id)
    {
        # code...
    }

    public function edit($id)
    {
        $siswa = Siswa::where('nis', $id)->first();
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
        'nama' => 'required|min:3',
        ]);

        Siswa::where('nis', trim($id))->update([
          'nama'  => $request->nama
        ]);

        return redirect('/siswa')->with('success', 'Berhasil Mengubah Data Siswa '.$request->nama);
    }

    public function destroy($id)
    {
        Siswa::where('nis', $id)->delete();
        return redirect('/siswa')->with('success', 'Berhasil Menghapus Data Siswa');
    }

    public function cekNis(Request $request)
    {
        $nisn = Siswa::where('nis', $request->nis)->count();
        if ($nisn > 0) {
            return "false";
        } else {
            return "true";
        }
    }
}
