<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    //menampilkan data
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')
            ->orderBy('ID')
            ->get();

        return view('keranjangbelanja.index', compact('keranjang'));
    }

    //menampilkan halaman tambah data
    public function create()
    {
        return view('keranjangbelanja.create');
    }

    //menyimpan data baru
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        return redirect()->route('keranjangbelanja.index');
    }

    //menghapus data
    public function destroy($id)
    {
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();
        return redirect()->route('keranjangbelanja.index');
    }
}
