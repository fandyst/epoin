<?php

namespace App\Http\Controllers;

use App\Dasbor;
use Illuminate\Http\Request;

class DasborController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dasbor = Dasbor::find(1);
        return view('dasbor.index', ['dasbor' => $dasbor]);
    }

    public function edit($id)
    {
      $dasbor = Dasbor::find($id);
      return view('dasbor.edit', ['dasbor' => $dasbor]);
    }

    public function update($id, Request $request)
    {
      Dasbor::find($id)->update([
        'title' => $request->title,
        'desc' => $request->desc,
        'users_id' => \Auth::user()->id
      ]);
      return redirect('/');
    }
}
