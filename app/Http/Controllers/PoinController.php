<?php

namespace App\Http\Controllers;

use App\Poin;
use App\PoinDetail;
use App\Peraturan;
use Illuminate\Http\Request;

class PoinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $poins = Poin::all();
        return view('poin.index', ['poins' => $poins]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $poindetails = PoinDetail::where('poins_id', $id)->get();
        $total = Poin::where('id', $id)->first(['jml_poin']);
        return view('poin.show', ['poindetails' => $poindetails, 'total' => $total]);
    }

    public function edit($id)
    {
        $poin = Poin::where('nis', $id)->first();
        $peraturans = Peraturan::all();
        return view('poin.edit', ['poin' => $poin, 'peraturans' => $peraturans]);
    }

    public function update(Request $request, $id)
    {
        $poin = $request->poinlama + $request->poin;
        Poin::where('nis', $id)->update(['jml_poin' => $poin]);
        $poins_id = Poin::where('nis', $id)->first(['id']);
        PoinDetail::create([
          'poins_id' => $poins_id->id,
          'kode' => $request->kode
        ]);
        return  redirect('/poin')->with('success', 'Berhasil Menambahkan '.$request->poin.' poin');
    }

    public function destroy($id)
    {
        //
    }
}
