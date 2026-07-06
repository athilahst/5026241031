<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    //menampilkan form tambah buku
    public function create()
   {
    return view('buku.create');
  }

    //menampilkan data buku
    public function index()
    {
        $buku = DB::table('buku')->orderBy('id')->get();
        return view('buku.index', compact('buku'));
    }

    public function pinjam($id)
    //mengubah status buku menjadi sedang dipinjam
    {
        DB::table('buku')->where('id', $id)->update(['sedang_dipinjam' => true]);

        return redirect()->route('buku.index');
    }
}
