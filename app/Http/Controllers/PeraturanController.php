<?php

namespace App\Http\Controllers;

use App\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $peraturans = Peraturan::all();

        return view('peraturan.index', ['peraturans' => $peraturans]);
    }

    public function create()
    {
        return view('peraturan.create');
    }

    public function store(Request $request)
    {
        Peraturan::create([
          'kode' => $request->kode,
          'nama_peraturan' => $request->nama_peraturan,
          'poin' => $request->poin
        ]);
        return redirect('/peraturan')->with('success', 'Berhasil Menambah Peraturan Baru');
    }

    public function edit($id)
    {
        $peraturan = Peraturan::find($id);
        return view('peraturan.edit', ['peraturan' => $peraturan]);
    }

    public function update($id, Request $request)
    {
        Peraturan::find($id)->update([
          'nama_peraturan' => $request->nama_peraturan,
          'poin' => $request->poin,
        ]);
        return redirect('/peraturan')->with('success', 'Berhasil Mengubah Data Peraturan');
    }

    public function destroy($id)
    {
        $peraturan = Peraturan::find($id);
        $peraturan->delete();
        return redirect('/peraturan')->with('success', 'Berhasil Menghapus Data Peraturan');
    }

    public function cekKode(Request $request)
    {
        $kode = Peraturan::where('kode', $request->kode)->count();
        if ($kode > 0) {
            return "false";
        } else {
            return "true";
        }
    }
}
