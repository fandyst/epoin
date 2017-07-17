<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = User::where('id', \Auth::user()->id)->first();
        return view('profil.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $cek= User::where('id', \Auth::user()->id)->first();
        if(\Hash::check($request->password, $cek->password)) {
          User::where('id', \Auth::user()->id)->update([
            'nip' => $request->nip,
            'name' => $request->nama
          ]);
          return redirect('/profil')->with('success', 'Berhasil Mengubah Profil Anda.');
        }else {
          return redirect('/profil')->with('failed', 'Password Yang anda Masukkan Tidak Tocok.');
        }
    }


    public function updatepass(Request $request)
    {
        $cek= User::where('id', \Auth::user()->id)->first();
        if(\Hash::check($request->oldpassword, $cek->password)) {
          User::where('id', \Auth::user()->id)->update([
            'password' => \Hash::make($request->newpassword)
          ]);
          return redirect('/profil')->with('success', 'Berhasil Mengubah Password Anda.');
        }else {
          return redirect('/profil')->with('failed', 'Password Lama yang Anda Masukkan Tidak Cocok.');
        }

    }
}
