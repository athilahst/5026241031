<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseController extends Controller
{
    //menampilkan data mouse
    public function index()
    {
        $mouse = DB::table('mouse')
            ->orderBy('kodemouse')
            ->get();
        return view('mouse.index', compact('mouse'));
    }

    //menampilkan tambah data
    public function create()
    {
        return view('mouse.create');
    }

    //menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'merkmouse' => 'required|max:30',
            'stockmouse' => 'required|integer',
            'tersedia' => 'required|max:1'
        ]);

        DB::table('mouse')->insert([
            'merkmouse' => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia' => $request->tersedia
        ]);
        return redirect()->route('mouse.index');
    }

    //menampilkan halaman edit
    public function edit($kode)
    {
        $mouse = DB::table('mouse')
            ->where('kodemouse', $kode)
            ->first();

        return view('mouse.edit', compact('mouse'));
    }

    //update data mouse
    public function update(Request $request, $kode)
    {
        $request->validate([
            'merkmouse' => 'required|max:30',
            'stockmouse' => 'required|integer',
            'tersedia' => 'required|max:1'
        ]);

        DB::table('mouse')
            ->where('kodemouse', $kode)
            ->update([
                'merkmouse' => $request->merkmouse,
                'stockmouse' => $request->stockmouse,
                'tersedia' => $request->tersedia
            ]);
        return redirect()->route('mouse.index');
    }

    //menghapus data mouse
    public function destroy($kode)
    {
        DB::table('mouse')
            ->where('kodemouse', $kode)
            ->delete();
        return redirect()->route('mouse.index');
    }
}
