<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'nip' => 'required|min:18|max:18',
          'nama' => 'required|min:6',
          'email' => 'required|email',
          'password' => 'required|min:6'
        ]);

        User::create([
          'nip' => $request->nip,
          'name' => $request->nama,
          'email' => $request->email,
          'password' => bcrypt($request->password)
        ]);

        return redirect('/user')->with('success', 'Berhasil Menambahkan User Baru');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/user')->with('success', 'Berhasil Menghapus User');
    }
}
